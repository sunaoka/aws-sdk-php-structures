<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptLocation
 * @property 'Selenium' $type
 */
class Script extends Shape
{
    /**
     * @param array{
     *     scriptLocation: string,
     *     type: 'Selenium'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
