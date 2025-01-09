<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $RoleArn
 * @property string $NextToken
 * @property int $MaxResults
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
     *     MaxResults?: int,
     *     ResourceModel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
