<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerCertificateConfiguration> $ServerCertificateConfigurations
 */
class TLSInspectionConfiguration extends Shape
{
    /**
     * @param array{ServerCertificateConfigurations?: list<ServerCertificateConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
