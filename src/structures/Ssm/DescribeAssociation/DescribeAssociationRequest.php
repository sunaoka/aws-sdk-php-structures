<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $InstanceId
 * @property string|null $AssociationId
 * @property string|null $AssociationVersion
 */
class DescribeAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceId?: string|null,
     *     AssociationId?: string|null,
     *     AssociationVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
