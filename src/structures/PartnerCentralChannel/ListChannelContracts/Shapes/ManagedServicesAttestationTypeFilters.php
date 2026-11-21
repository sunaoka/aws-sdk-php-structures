<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $relationshipIdentifiers
 * @property list<string>|null $legalEntityNames
 */
class ManagedServicesAttestationTypeFilters extends Shape
{
    /**
     * @param array{
     *     relationshipIdentifiers?: list<string>|null,
     *     legalEntityNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
