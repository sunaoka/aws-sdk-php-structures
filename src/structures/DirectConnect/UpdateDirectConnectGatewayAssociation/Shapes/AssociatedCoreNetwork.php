<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGatewayAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $ownerAccount
 * @property string $attachmentId
 */
class AssociatedCoreNetwork extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     ownerAccount?: string,
     *     attachmentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
