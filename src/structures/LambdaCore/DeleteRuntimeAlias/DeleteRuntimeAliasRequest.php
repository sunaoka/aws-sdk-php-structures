<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteRuntimeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $Name
 * @property int<7, 30>|null $RecoveryWindowInDays
 */
class DeleteRuntimeAliasRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Name: string,
     *     RecoveryWindowInDays?: int<7, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
