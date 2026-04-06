<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null $AssociationType
 */
class AddAssociationRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     DestinationArn: string,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
