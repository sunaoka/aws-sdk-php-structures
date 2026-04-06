<?php

namespace Sunaoka\Aws\Structures\B2bi\DeleteCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capabilityId
 */
class DeleteCapabilityRequest extends Request
{
    /**
     * @param array{capabilityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
