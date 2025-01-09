<?php

namespace Sunaoka\Aws\Structures\Lambda\PutRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property 'Auto'|'Manual'|'FunctionUpdate' $UpdateRuntimeOn
 * @property string $RuntimeVersionArn
 */
class PutRuntimeManagementConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string,
     *     UpdateRuntimeOn: 'Auto'|'Manual'|'FunctionUpdate',
     *     RuntimeVersionArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
