<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'None'|'Tail'|null $LogType
 * @property string|null $ClientContext
 * @property string|null $Qualifier
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Payload
 * @property string|null $TenantId
 * @property 'RequestResponse'|'DryRun'|null $InvocationType
 */
class InvokeWithResponseStreamRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     LogType?: 'None'|'Tail'|null,
     *     ClientContext?: string|null,
     *     Qualifier?: string|null,
     *     Payload?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     TenantId?: string|null,
     *     InvocationType?: 'RequestResponse'|'DryRun'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
