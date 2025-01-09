<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateStepGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property list<string> $previous
 * @property list<string> $next
 */
class TemplateStepGroupSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     previous?: list<string>,
     *     next?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
