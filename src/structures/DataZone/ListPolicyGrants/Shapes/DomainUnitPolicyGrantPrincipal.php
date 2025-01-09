<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER' $domainUnitDesignation
 * @property DomainUnitGrantFilter $domainUnitGrantFilter
 * @property string $domainUnitIdentifier
 */
class DomainUnitPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     domainUnitDesignation: 'OWNER',
     *     domainUnitGrantFilter?: DomainUnitGrantFilter,
     *     domainUnitIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
