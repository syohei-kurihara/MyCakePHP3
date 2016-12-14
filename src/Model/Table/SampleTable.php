<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class SampleTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tex');
        $this->displayField('tex_url');
        $this->primaryKey('id');
    }

//    public function validationDefault(Validator $validator)
//    {
//        $validator
//            ->integer('id')
//            ->allowEmpty('id', 'create');
//
//        $validator
//            ->allowEmpty('tex_url');
//
//        return $validator;
//    }
//
//    public function buildRules(RulesChecker $rules)
//    {
//        $rules->add($rules->existsIn(['user_id'], 'Users'));
//
//        return $rules;
//    }
}

?>