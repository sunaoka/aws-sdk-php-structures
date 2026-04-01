<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CertificateFilterStatement>|null $And
 * @property list<CertificateFilterStatement>|null $Or
 * @property CertificateFilterStatement|null $Not
 * @property CertificateFilter|null $Filter
 */
class CertificateFilterStatement extends Shape
{
    /**
     * @param array{
     *     And?: list<CertificateFilterStatement>|null,
     *     Or?: list<CertificateFilterStatement>|null,
     *     Not?: CertificateFilterStatement|null,
     *     Filter?: CertificateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
