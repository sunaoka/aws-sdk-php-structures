<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudVmClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamRoleArn
 * @property 'ASSOCIATING'|'DISASSOCIATING'|'FAILED'|'CONNECTED'|'DISCONNECTED'|'PARTIALLY_CONNECTED'|'UNKNOWN'|null $status
 * @property string|null $statusReason
 * @property 'KmsTde'|null $awsIntegration
 */
class IamRole extends Shape
{
    /**
     * @param array{
     *     iamRoleArn?: string|null,
     *     status?: 'ASSOCIATING'|'DISASSOCIATING'|'FAILED'|'CONNECTED'|'DISCONNECTED'|'PARTIALLY_CONNECTED'|'UNKNOWN'|null,
     *     statusReason?: string|null,
     *     awsIntegration?: 'KmsTde'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
