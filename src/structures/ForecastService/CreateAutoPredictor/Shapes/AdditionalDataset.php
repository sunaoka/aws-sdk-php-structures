<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property array<string, list<string>> $Configuration
 */
class AdditionalDataset extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
