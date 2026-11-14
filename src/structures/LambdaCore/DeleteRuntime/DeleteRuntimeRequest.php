<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property int<7, 30>|null $RecoveryWindowInDays
 */
class DeleteRuntimeRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     RecoveryWindowInDays?: int<7, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
