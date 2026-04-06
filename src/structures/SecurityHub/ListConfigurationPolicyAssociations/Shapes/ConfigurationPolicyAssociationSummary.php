<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigurationPolicyId
 * @property string|null $TargetId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'|null $TargetType
 * @property 'INHERITED'|'APPLIED'|null $AssociationType
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'PENDING'|'SUCCESS'|'FAILED'|null $AssociationStatus
 * @property string|null $AssociationStatusMessage
 */
class ConfigurationPolicyAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyId?: string|null,
     *     TargetId?: string|null,
     *     TargetType?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'|null,
     *     AssociationType?: 'INHERITED'|'APPLIED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AssociationStatus?: 'PENDING'|'SUCCESS'|'FAILED'|null,
     *     AssociationStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
