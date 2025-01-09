<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLicenseEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $licenseEndpointId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY' $status
 * @property string $statusMessage
 * @property string $vpcId
 */
class LicenseEndpointSummary extends Shape
{
    /**
     * @param array{
     *     licenseEndpointId?: string,
     *     status?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY',
     *     statusMessage?: string,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
