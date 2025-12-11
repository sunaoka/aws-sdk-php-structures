<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetHookResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HookResultId
 */
class GetHookResultRequest extends Request
{
    /**
     * @param array{HookResultId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
