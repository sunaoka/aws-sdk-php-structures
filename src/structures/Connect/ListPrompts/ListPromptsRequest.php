<?php

namespace Sunaoka\Aws\Structures\Connect\ListPrompts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListPromptsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
