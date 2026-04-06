<?php

namespace Sunaoka\Aws\Structures\Lambda\Invoke;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'Event'|'RequestResponse'|'DryRun'|null $InvocationType
 * @property 'None'|'Tail'|null $LogType
 * @property string|null $ClientContext
 * @property string|null $DurableExecutionName
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Payload
 * @property string|null $Qualifier
 * @property string|null $TenantId
 */
class InvokeRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     InvocationType?: 'Event'|'RequestResponse'|'DryRun'|null,
     *     LogType?: 'None'|'Tail'|null,
     *     ClientContext?: string|null,
     *     DurableExecutionName?: string|null,
     *     Payload?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Qualifier?: string|null,
     *     TenantId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
