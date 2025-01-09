<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyLunaClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientArn
 * @property string $Certificate
 */
class ModifyLunaClientRequest extends Request
{
    /**
     * @param array{
     *     ClientArn: string,
     *     Certificate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
