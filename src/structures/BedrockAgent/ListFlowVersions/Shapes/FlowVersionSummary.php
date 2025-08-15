<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $version
 */
class FlowVersionSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     status: 'Failed'|'Prepared'|'Preparing'|'NotPrepared',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
