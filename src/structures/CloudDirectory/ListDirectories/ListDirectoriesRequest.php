<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ENABLED'|'DISABLED'|'DELETED' $state
 */
class ListDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     state?: 'ENABLED'|'DISABLED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
