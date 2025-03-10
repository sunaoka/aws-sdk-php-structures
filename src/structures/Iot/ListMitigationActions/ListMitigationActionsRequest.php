<?php

namespace Sunaoka\Aws\Structures\Iot\ListMitigationActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'UPDATE_DEVICE_CERTIFICATE'|'UPDATE_CA_CERTIFICATE'|'ADD_THINGS_TO_THING_GROUP'|'REPLACE_DEFAULT_POLICY_VERSION'|'ENABLE_IOT_LOGGING'|'PUBLISH_FINDING_TO_SNS'|null $actionType
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListMitigationActionsRequest extends Request
{
    /**
     * @param array{
     *     actionType?: 'UPDATE_DEVICE_CERTIFICATE'|'UPDATE_CA_CERTIFICATE'|'ADD_THINGS_TO_THING_GROUP'|'REPLACE_DEFAULT_POLICY_VERSION'|'ENABLE_IOT_LOGGING'|'PUBLISH_FINDING_TO_SNS'|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
