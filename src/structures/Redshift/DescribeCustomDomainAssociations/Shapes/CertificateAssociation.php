<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomDomainName
 * @property string|null $ClusterIdentifier
 */
class CertificateAssociation extends Shape
{
    /**
     * @param array{
     *     CustomDomainName?: string|null,
     *     ClusterIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
