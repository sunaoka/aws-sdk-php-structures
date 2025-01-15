<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $stepGroupId
 * @property string|null $templateId
 * @property string|null $name
 * @property 'MANUAL'|'AUTOMATED'|null $stepActionType
 * @property 'SINGLE'|'ALL'|'NONE'|null $targetType
 * @property 'AWS_MANAGED'|'CUSTOM'|null $owner
 * @property list<string>|null $previous
 * @property list<string>|null $next
 */
class TemplateStepSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     stepGroupId?: string|null,
     *     templateId?: string|null,
     *     name?: string|null,
     *     stepActionType?: 'MANUAL'|'AUTOMATED'|null,
     *     targetType?: 'SINGLE'|'ALL'|'NONE'|null,
     *     owner?: 'AWS_MANAGED'|'CUSTOM'|null,
     *     previous?: list<string>|null,
     *     next?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
