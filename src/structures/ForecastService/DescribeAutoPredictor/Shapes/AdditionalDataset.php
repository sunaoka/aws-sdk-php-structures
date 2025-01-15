<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property array<string, list<string>>|null $Configuration
 */
class AdditionalDataset extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
