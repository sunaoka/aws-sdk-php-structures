<?php

namespace Sunaoka\Aws\Structures\ElementalInference\SearchFixtures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPETITOR' $name
 * @property list<string> $values
 */
class SearchFilter extends Shape
{
    /**
     * @param array{
     *     name: 'COMPETITOR',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
