<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Ami> $amis
 * @property list<Container> $containers
 */
class OutputResources extends Shape
{
    /**
     * @param array{
     *     amis?: list<Ami>,
     *     containers?: list<Container>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
