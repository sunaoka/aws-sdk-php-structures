<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $RoleArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $ResourceModel
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string|null,
     *     RoleArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ResourceModel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
