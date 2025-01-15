<?php

namespace Sunaoka\Aws\Structures\Lambda\PutRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 * @property 'Auto'|'Manual'|'FunctionUpdate' $UpdateRuntimeOn
 * @property string|null $RuntimeVersionArn
 */
class PutRuntimeManagementConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null,
     *     UpdateRuntimeOn: 'Auto'|'Manual'|'FunctionUpdate',
     *     RuntimeVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
