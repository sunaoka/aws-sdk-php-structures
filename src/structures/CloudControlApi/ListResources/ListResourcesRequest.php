<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $RoleArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $ResourceModel
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string,
     *     RoleArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     ResourceModel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
