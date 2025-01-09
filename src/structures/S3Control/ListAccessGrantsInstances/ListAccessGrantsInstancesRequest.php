<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int<0, 1000> $MaxResults
 */
class ListAccessGrantsInstancesRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
