<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptLocation
 * @property 'Selenium' $type
 */
class ScriptSummary extends Shape
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
