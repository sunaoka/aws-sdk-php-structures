<?php

namespace Sunaoka\Aws\Structures\GameLift\ResolveAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 */
class ResolveAliasRequest extends Request
{
    /**
     * @param array{AliasId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
