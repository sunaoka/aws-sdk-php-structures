<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string $description
 * @property array<string, string> $parameters
 * @property array<string, string> $targets
 * @property list<string> $startAfter
 */
class CreateExperimentTemplateActionInput extends Shape
{
    /**
     * @param array{
     *     actionId: string,
     *     description?: string,
     *     parameters?: array<string, string>,
     *     targets?: array<string, string>,
     *     startAfter?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
