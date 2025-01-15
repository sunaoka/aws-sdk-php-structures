<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportClientVpnClientCertificateRevocationList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'active'|null $Code
 * @property string|null $Message
 */
class ClientCertificateRevocationListStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'active'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
