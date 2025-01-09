<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkAclAssociationId
 * @property string $NetworkAclId
 * @property string $SubnetId
 */
class AwsEc2NetworkAclAssociation extends Shape
{
    /**
     * @param array{
     *     NetworkAclAssociationId?: string,
     *     NetworkAclId?: string,
     *     SubnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
