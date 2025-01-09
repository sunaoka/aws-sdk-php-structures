<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeHsmClientCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmClientCertificateIdentifier
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeHsmClientCertificatesRequest extends Request
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
