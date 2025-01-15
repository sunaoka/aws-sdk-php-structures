<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLicenseEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $licenseEndpointId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY'|null $status
 * @property string|null $statusMessage
 * @property string|null $vpcId
 */
class LicenseEndpointSummary extends Shape
{
    /**
     * @param array{
     *     licenseEndpointId?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY'|null,
     *     statusMessage?: string|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
