<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER' $domainUnitDesignation
 * @property DomainUnitGrantFilter|null $domainUnitGrantFilter
 * @property string|null $domainUnitIdentifier
 */
class DomainUnitPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     domainUnitDesignation: 'OWNER',
     *     domainUnitGrantFilter?: DomainUnitGrantFilter|null,
     *     domainUnitIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
