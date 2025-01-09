<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Name
 */
class DeleteAliasRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
