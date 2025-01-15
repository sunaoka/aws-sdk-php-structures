<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $InstanceId
 * @property string|null $AssociationId
 */
class DeleteAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceId?: string|null,
     *     AssociationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
