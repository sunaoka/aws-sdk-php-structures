<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property string $AssociationId
 */
class DeleteAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceId?: string,
     *     AssociationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
