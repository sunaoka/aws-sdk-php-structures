<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionId
 * @property string|null $description
 * @property array<string, string>|null $parameters
 * @property array<string, string>|null $targets
 * @property list<string>|null $startAfter
 */
class ExperimentTemplateAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string|null,
     *     description?: string|null,
     *     parameters?: array<string, string>|null,
     *     targets?: array<string, string>|null,
     *     startAfter?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
