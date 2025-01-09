<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetAccountPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UserAuthorizationRequired
 * @property bool $TrainingDataCollectionEnabled
 */
class AccountPreferences extends Shape
{
    /**
     * @param array{
     *     UserAuthorizationRequired?: bool,
     *     TrainingDataCollectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
