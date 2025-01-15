<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateAccountPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $UserAuthorizationRequired
 * @property bool|null $TrainingDataCollectionEnabled
 */
class AccountPreferences extends Shape
{
    /**
     * @param array{
     *     UserAuthorizationRequired?: bool|null,
     *     TrainingDataCollectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
