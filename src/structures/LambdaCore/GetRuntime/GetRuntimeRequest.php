<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 */
class GetRuntimeRequest extends Request
{
    /**
     * @param array{RuntimeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
