<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property string $SourceType
 * @property string $DestinationType
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs' $AssociationType
 * @property string $SourceName
 * @property string $DestinationName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 */
class AssociationSummary extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     DestinationArn?: string,
     *     SourceType?: string,
     *     DestinationType?: string,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs',
     *     SourceName?: string,
     *     DestinationName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
