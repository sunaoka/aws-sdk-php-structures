<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerCertificateConfiguration>|null $ServerCertificateConfigurations
 */
class TLSInspectionConfiguration extends Shape
{
    /**
     * @param array{ServerCertificateConfigurations?: list<ServerCertificateConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
