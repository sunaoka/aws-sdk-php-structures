<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property int $MaximumRetryAttempts
 * @property int $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 */
class PutFunctionEventInvokeConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string,
     *     MaximumRetryAttempts?: int,
     *     MaximumEventAgeInSeconds?: int,
     *     DestinationConfig?: Shapes\DestinationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
