<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property Shapes\AssociationStatus $AssociationStatus
 */
class UpdateAssociationStatusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceId: string,
     *     AssociationStatus: Shapes\AssociationStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
