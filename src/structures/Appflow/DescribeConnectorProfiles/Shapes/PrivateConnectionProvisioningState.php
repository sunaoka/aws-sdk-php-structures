<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'PENDING'|'CREATED' $status
 * @property string $failureMessage
 * @property 'CONNECTOR_AUTHENTICATION'|'CONNECTOR_SERVER'|'INTERNAL_SERVER'|'ACCESS_DENIED'|'VALIDATION' $failureCause
 */
class PrivateConnectionProvisioningState extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'PENDING'|'CREATED',
     *     failureMessage?: string,
     *     failureCause?: 'CONNECTOR_AUTHENTICATION'|'CONNECTOR_SERVER'|'INTERNAL_SERVER'|'ACCESS_DENIED'|'VALIDATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
