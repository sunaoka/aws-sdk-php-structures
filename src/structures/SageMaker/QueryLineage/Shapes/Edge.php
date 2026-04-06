<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property string|null $DestinationArn
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null $AssociationType
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     DestinationArn?: string|null,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
