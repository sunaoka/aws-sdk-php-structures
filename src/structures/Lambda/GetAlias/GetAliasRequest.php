<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Name
 */
class GetAliasRequest extends Request
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
