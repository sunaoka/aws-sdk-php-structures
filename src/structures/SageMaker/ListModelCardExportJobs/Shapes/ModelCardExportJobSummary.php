<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelCardExportJobName
 * @property string $ModelCardExportJobArn
 * @property 'InProgress'|'Completed'|'Failed' $Status
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastModifiedAt
 */
class ModelCardExportJobSummary extends Shape
{
    /**
     * @param array{
     *     ModelCardExportJobName: string,
     *     ModelCardExportJobArn: string,
     *     Status: 'InProgress'|'Completed'|'Failed',
     *     ModelCardName: string,
     *     ModelCardVersion: int,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastModifiedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
