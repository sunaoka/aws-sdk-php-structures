<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
