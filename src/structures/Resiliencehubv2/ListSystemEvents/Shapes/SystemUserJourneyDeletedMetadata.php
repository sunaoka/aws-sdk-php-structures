<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userJourneyName
 * @property list<ServiceReference>|null $associatedServicesAtDeletion
 */
class SystemUserJourneyDeletedMetadata extends Shape
{
    /**
     * @param array{
     *     userJourneyName?: string|null,
     *     associatedServicesAtDeletion?: list<ServiceReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
