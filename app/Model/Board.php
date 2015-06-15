<?php

class Board extends AppModel {

	public $validate = array(
			'title' => array(
					'title-rule1' => array(
							'rule' => 'notEmpty',
							'message' => 'タイトルを入力してください'
					),
					'title-rule2' => array(
							'rule' => array('maxLength', 20),
							'message' => '最大文字数は半角 %s 文字になっていてくれると嬉しいです。'
					),
			),
			'name' => array(
				'name-rule1' => array(
						'rule' => 'notEmpty',
						'message' => '名前を入力してください'
				),
				'name-rule2' => array(
						'rule' => array('maxLength', 20),
						'message' => '最大文字数は%s文字です。（全角半角問わず）'
				),
			),
			'message' => array(
				'message-rule1' => array(
					'rule' => 'notEmpty',
					'message' => '本文を入力してください'
				),
				'message-rule2' => array(
					'rule' => array('maxLength', 40),
					'message' => '最大文字数は40文字です。（全角半角問わず）'
				)
			)
	);
}