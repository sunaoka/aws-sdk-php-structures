<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $id
 * @property string $name
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class FlowSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     id: string,
     *     name: string,
     *     status: 'Failed'|'Prepared'|'Preparing'|'NotPrepared',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
