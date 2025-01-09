<?php

namespace Sunaoka\Aws\Structures\Ssm\DisassociateOpsItemRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsItemId
 * @property string $AssociationId
 */
class DisassociateOpsItemRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     OpsItemId: string,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
