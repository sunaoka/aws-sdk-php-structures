<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetSecurityRequirementPack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 */
class GetSecurityRequirementPackRequest extends Request
{
    /**
     * @param array{packId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
