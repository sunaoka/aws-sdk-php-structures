<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateAccountPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $UserAuthorizationRequired
 * @property bool|null $TrainingDataCollectionEnabled
 */
class UpdateAccountPreferencesRequest extends Request
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
