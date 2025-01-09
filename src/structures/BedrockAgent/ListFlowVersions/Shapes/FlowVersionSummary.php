<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property string $version
 */
class FlowVersionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     id: string,
     *     status: 'Failed'|'Prepared'|'Preparing'|'NotPrepared',
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
