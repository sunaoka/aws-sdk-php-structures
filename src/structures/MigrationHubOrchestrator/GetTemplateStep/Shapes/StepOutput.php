<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP' $dataType
 * @property bool $required
 */
class StepOutput extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP',
     *     required?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
