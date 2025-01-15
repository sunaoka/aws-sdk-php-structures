<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppSyncRuntime $runtime
 * @property string $code
 * @property string $context
 * @property string|null $function
 */
class EvaluateCodeRequest extends Request
{
    /**
     * @param array{
     *     runtime: Shapes\AppSyncRuntime,
     *     code: string,
     *     context: string,
     *     function?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
