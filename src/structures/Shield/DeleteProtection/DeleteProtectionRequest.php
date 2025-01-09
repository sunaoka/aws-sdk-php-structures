<?php

namespace Sunaoka\Aws\Structures\Shield\DeleteProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionId
 */
class DeleteProtectionRequest extends Request
{
    /**
     * @param array{ProtectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
