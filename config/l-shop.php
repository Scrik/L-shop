<?php

/**
 * File with "technical" L-shop system configuration
 *
 * @author  D3lph1 <d3lph1.contact@gmail.com>
 */

return [
    'validation' => [
        'username' => [
            'min' => '4',
            'max' => '32',
            'rule' => 'alpha_dash'
        ],
        'password' => [
            'min' => '4',
            'max' => '191'
        ]
    ]
];