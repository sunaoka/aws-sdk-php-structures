<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomDomainName
 * @property string $ClusterIdentifier
 */
class CertificateAssociation extends Shape
{
    /**
     * @param array{
     *     CustomDomainName?: string,
     *     ClusterIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
