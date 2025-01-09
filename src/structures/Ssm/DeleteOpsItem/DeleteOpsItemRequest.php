<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsItemId
 */
class DeleteOpsItemRequest extends Request
{
    /**
     * @param array{OpsItemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
