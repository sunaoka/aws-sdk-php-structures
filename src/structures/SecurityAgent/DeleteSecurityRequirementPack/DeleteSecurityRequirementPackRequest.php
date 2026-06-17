<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteSecurityRequirementPack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 */
class DeleteSecurityRequirementPackRequest extends Request
{
    /**
     * @param array{packId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
