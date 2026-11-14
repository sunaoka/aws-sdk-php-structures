<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigurationPolicyId
 * @property 'INHERITED'|'APPLIED'|null $AssociationType
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'DISABLED'|null $AssociationStatus
 */
class AssociationFilters extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyId?: string|null,
     *     AssociationType?: 'INHERITED'|'APPLIED'|null,
     *     AssociationStatus?: 'PENDING'|'SUCCESS'|'FAILED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
