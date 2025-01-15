<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkAclAssociationId
 * @property string|null $NetworkAclId
 * @property string|null $SubnetId
 */
class AwsEc2NetworkAclAssociation extends Shape
{
    /**
     * @param array{
     *     NetworkAclAssociationId?: string|null,
     *     NetworkAclId?: string|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
