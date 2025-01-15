<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CertificateIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
