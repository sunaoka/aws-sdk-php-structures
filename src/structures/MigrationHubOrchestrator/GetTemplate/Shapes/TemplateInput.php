<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP' $dataType
 * @property bool $required
 */
class TemplateInput extends Shape
{
    /**
     * @param array{
     *     inputName?: string,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP',
     *     required?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
