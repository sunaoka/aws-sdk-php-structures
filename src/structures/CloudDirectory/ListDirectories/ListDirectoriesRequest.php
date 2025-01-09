<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDirectories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property 'ENABLED'|'DISABLED'|'DELETED' $state
 */
class ListDirectoriesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, max>,
     *     state?: 'ENABLED'|'DISABLED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
