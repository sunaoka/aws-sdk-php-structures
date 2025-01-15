<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $state
 */
class ListDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     state?: 'ENABLED'|'DISABLED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
