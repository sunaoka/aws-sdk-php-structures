<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntimeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $Name
 */
class GetRuntimeAliasRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
