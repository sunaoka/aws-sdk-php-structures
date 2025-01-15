<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CidrBlockAssociation>|null $CidrBlockAssociationSet
 * @property list<Ipv6CidrBlockAssociation>|null $Ipv6CidrBlockAssociationSet
 * @property string|null $DhcpOptionsId
 * @property string|null $State
 */
class AwsEc2VpcDetails extends Shape
{
    /**
     * @param array{
     *     CidrBlockAssociationSet?: list<CidrBlockAssociation>|null,
     *     Ipv6CidrBlockAssociationSet?: list<Ipv6CidrBlockAssociation>|null,
     *     DhcpOptionsId?: string|null,
     *     State?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
