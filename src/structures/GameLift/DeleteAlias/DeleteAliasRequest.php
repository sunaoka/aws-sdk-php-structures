<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 */
class DeleteAliasRequest extends Request
{
    /**
     * @param array{AliasId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
