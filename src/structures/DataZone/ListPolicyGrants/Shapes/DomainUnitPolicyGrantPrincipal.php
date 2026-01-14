<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER' $domainUnitDesignation
 * @property string|null $domainUnitIdentifier
 * @property DomainUnitGrantFilter|null $domainUnitGrantFilter
 */
class DomainUnitPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     domainUnitDesignation: 'OWNER',
     *     domainUnitIdentifier?: string|null,
     *     domainUnitGrantFilter?: DomainUnitGrantFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
