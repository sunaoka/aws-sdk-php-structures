<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListRegistries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $status
 */
class ListRegistriesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
