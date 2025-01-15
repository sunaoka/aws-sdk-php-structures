<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null $dataType
 * @property bool|null $required
 */
class StepOutput extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
