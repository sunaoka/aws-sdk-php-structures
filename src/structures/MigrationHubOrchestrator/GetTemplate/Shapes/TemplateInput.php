<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inputName
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null $dataType
 * @property bool|null $required
 */
class TemplateInput extends Shape
{
    /**
     * @param array{
     *     inputName?: string|null,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
