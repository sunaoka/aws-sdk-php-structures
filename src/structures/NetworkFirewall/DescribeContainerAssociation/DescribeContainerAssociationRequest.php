<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeContainerAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContainerAssociationName
 * @property string|null $ContainerAssociationArn
 */
class DescribeContainerAssociationRequest extends Request
{
    /**
     * @param array{
     *     ContainerAssociationName?: string|null,
     *     ContainerAssociationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
