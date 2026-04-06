<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property string|null $DestinationArn
 * @property string|null $SourceType
 * @property string|null $DestinationType
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null $AssociationType
 * @property string|null $SourceName
 * @property string|null $DestinationName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 */
class AssociationSummary extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     DestinationArn?: string|null,
     *     SourceType?: string|null,
     *     DestinationType?: string|null,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null,
     *     SourceName?: string|null,
     *     DestinationName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
