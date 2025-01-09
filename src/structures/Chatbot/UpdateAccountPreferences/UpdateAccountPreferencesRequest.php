<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateAccountPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $UserAuthorizationRequired
 * @property bool $TrainingDataCollectionEnabled
 */
class UpdateAccountPreferencesRequest extends Request
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
