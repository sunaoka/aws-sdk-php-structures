<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $id
 * @property string $arn
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class FlowSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     id: string,
     *     arn: string,
     *     status: 'Failed'|'Prepared'|'Preparing'|'NotPrepared',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
