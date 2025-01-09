<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'RequestResponse'|'DryRun' $InvocationType
 * @property 'None'|'Tail' $LogType
 * @property string $ClientContext
 * @property string $Qualifier
 * @property string $Payload
 */
class InvokeWithResponseStreamRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     InvocationType?: 'RequestResponse'|'DryRun',
     *     LogType?: 'None'|'Tail',
     *     ClientContext?: string,
     *     Qualifier?: string,
     *     Payload?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
