<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 7>|null $MaxResults
 */
class ListInstanceAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 7>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
