<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs' $AssociationType
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     DestinationArn?: string,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
