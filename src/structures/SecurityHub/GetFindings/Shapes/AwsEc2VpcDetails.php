<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CidrBlockAssociation> $CidrBlockAssociationSet
 * @property list<Ipv6CidrBlockAssociation> $Ipv6CidrBlockAssociationSet
 * @property string $DhcpOptionsId
 * @property string $State
 */
class AwsEc2VpcDetails extends Shape
{
    /**
     * @param array{
     *     CidrBlockAssociationSet?: list<CidrBlockAssociation>,
     *     Ipv6CidrBlockAssociationSet?: list<Ipv6CidrBlockAssociation>,
     *     DhcpOptionsId?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
