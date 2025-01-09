<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property string $AssociationId
 * @property string $AssociationVersion
 */
class DescribeAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceId?: string,
     *     AssociationId?: string,
     *     AssociationVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
