<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $ownerAccount
 * @property string|null $attachmentId
 */
class AssociatedCoreNetwork extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     ownerAccount?: string|null,
     *     attachmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
