<?php

namespace Sunaoka\Aws\Structures\Lambda\Invoke;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'Event'|'RequestResponse'|'DryRun' $InvocationType
 * @property 'None'|'Tail' $LogType
 * @property string $ClientContext
 * @property string $Payload
 * @property string $Qualifier
 */
class InvokeRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     InvocationType?: 'Event'|'RequestResponse'|'DryRun',
     *     LogType?: 'None'|'Tail',
     *     ClientContext?: string,
     *     Payload?: string,
     *     Qualifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
