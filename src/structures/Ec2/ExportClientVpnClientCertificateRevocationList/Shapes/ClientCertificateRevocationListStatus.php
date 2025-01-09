<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportClientVpnClientCertificateRevocationList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'active' $Code
 * @property string $Message
 */
class ClientCertificateRevocationListStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'active',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
