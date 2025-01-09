<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $stepGroupId
 * @property string $templateId
 * @property string $name
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property 'SINGLE'|'ALL'|'NONE' $targetType
 * @property 'AWS_MANAGED'|'CUSTOM' $owner
 * @property list<string> $previous
 * @property list<string> $next
 */
class TemplateStepSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     stepGroupId?: string,
     *     templateId?: string,
     *     name?: string,
     *     stepActionType?: 'MANUAL'|'AUTOMATED',
     *     targetType?: 'SINGLE'|'ALL'|'NONE',
     *     owner?: 'AWS_MANAGED'|'CUSTOM',
     *     previous?: list<string>,
     *     next?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
