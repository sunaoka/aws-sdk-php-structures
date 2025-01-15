<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Ami>|null $amis
 * @property list<Container>|null $containers
 */
class OutputResources extends Shape
{
    /**
     * @param array{
     *     amis?: list<Ami>|null,
     *     containers?: list<Container>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
