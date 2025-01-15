<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $integerValue
 * @property string|null $stringValue
 * @property list<string>|null $listOfStringsValue
 * @property array<string, string>|null $mapOfStringValue
 */
class StepInput extends Shape
{
    /**
     * @param array{
     *     integerValue?: int|null,
     *     stringValue?: string|null,
     *     listOfStringsValue?: list<string>|null,
     *     mapOfStringValue?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
