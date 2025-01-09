<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 7> $MaxResults
 */
class ListInstanceAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 7>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
