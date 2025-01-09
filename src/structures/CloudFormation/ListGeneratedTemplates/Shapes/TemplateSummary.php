<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListGeneratedTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeneratedTemplateId
 * @property string $GeneratedTemplateName
 * @property 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property int $NumberOfResources
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     GeneratedTemplateId?: string,
     *     GeneratedTemplateName?: string,
     *     Status?: 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE',
     *     StatusReason?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     NumberOfResources?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
