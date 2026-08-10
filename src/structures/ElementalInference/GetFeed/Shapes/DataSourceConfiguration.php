<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fixtureId
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{fixtureId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
