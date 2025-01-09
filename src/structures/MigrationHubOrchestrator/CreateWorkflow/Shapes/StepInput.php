<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $integerValue
 * @property string $stringValue
 * @property list<string> $listOfStringsValue
 * @property array<string, string> $mapOfStringValue
 */
class StepInput extends Shape
{
    /**
     * @param array{
     *     integerValue?: int,
     *     stringValue?: string,
     *     listOfStringsValue?: list<string>,
     *     mapOfStringValue?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
