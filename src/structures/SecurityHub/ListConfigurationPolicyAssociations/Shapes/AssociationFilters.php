<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationPolicyId
 * @property 'INHERITED'|'APPLIED' $AssociationType
 * @property 'PENDING'|'SUCCESS'|'FAILED' $AssociationStatus
 */
class AssociationFilters extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyId?: string,
     *     AssociationType?: 'INHERITED'|'APPLIED',
     *     AssociationStatus?: 'PENDING'|'SUCCESS'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
