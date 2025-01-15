<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'PENDING'|'CREATED'|null $status
 * @property string|null $failureMessage
 * @property 'CONNECTOR_AUTHENTICATION'|'CONNECTOR_SERVER'|'INTERNAL_SERVER'|'ACCESS_DENIED'|'VALIDATION'|null $failureCause
 */
class PrivateConnectionProvisioningState extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'PENDING'|'CREATED'|null,
     *     failureMessage?: string|null,
     *     failureCause?: 'CONNECTOR_AUTHENTICATION'|'CONNECTOR_SERVER'|'INTERNAL_SERVER'|'ACCESS_DENIED'|'VALIDATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
