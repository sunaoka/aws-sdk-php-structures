<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateConnectionAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 */
class DisassociateConnectionAliasRequest extends Request
{
    /**
     * @param array{AliasId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
