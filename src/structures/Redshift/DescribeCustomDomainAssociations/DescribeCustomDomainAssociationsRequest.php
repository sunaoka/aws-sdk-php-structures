<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomDomainName
 * @property string $CustomDomainCertificateArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCustomDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     CustomDomainName?: string,
     *     CustomDomainCertificateArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
