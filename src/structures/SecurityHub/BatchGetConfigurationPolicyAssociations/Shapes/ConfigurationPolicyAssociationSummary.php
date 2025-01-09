<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationPolicyId
 * @property string $TargetId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT' $TargetType
 * @property 'INHERITED'|'APPLIED' $AssociationType
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'PENDING'|'SUCCESS'|'FAILED' $AssociationStatus
 * @property string $AssociationStatusMessage
 */
class ConfigurationPolicyAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyId?: string,
     *     TargetId?: string,
     *     TargetType?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT',
     *     AssociationType?: 'INHERITED'|'APPLIED',
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     AssociationStatus?: 'PENDING'|'SUCCESS'|'FAILED',
     *     AssociationStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
