<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFixture\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property bool|null $isHome
 */
class Competitor extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     isHome?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
