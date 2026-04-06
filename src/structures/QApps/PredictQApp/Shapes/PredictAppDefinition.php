<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string|null $description
 * @property AppDefinitionInput $appDefinition
 */
class PredictAppDefinition extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     description?: string|null,
     *     appDefinition: AppDefinitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
