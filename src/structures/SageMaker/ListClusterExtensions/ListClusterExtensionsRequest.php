<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 */
class ListClusterExtensionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
