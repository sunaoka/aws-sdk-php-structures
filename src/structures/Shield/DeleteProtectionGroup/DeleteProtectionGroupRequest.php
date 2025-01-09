<?php

namespace Sunaoka\Aws\Structures\Shield\DeleteProtectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionGroupId
 */
class DeleteProtectionGroupRequest extends Request
{
    /**
     * @param array{ProtectionGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
