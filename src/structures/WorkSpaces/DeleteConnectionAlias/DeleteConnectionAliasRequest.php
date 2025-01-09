<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteConnectionAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 */
class DeleteConnectionAliasRequest extends Request
{
    /**
     * @param array{AliasId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
