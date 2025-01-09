<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property int<0, 2> $MaximumRetryAttempts
 * @property int<60, 21600> $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 */
class UpdateFunctionEventInvokeConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string,
     *     MaximumRetryAttempts?: int<0, 2>,
     *     MaximumEventAgeInSeconds?: int<60, 21600>,
     *     DestinationConfig?: Shapes\DestinationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
