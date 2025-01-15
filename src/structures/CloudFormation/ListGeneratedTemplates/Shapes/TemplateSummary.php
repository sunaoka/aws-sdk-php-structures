<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListGeneratedTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GeneratedTemplateId
 * @property string|null $GeneratedTemplateName
 * @property 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property int<0, max>|null $NumberOfResources
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     GeneratedTemplateId?: string|null,
     *     GeneratedTemplateName?: string|null,
     *     Status?: 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE'|null,
     *     StatusReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     NumberOfResources?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
