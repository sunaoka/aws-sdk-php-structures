<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CustomDomainName
 * @property string|null $CustomDomainCertificateArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCustomDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     CustomDomainName?: string|null,
     *     CustomDomainCertificateArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
