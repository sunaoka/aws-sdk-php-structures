<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 * @property int<0, 2>|null $MaximumRetryAttempts
 * @property int<60, 21600>|null $MaximumEventAgeInSeconds
 * @property Shapes\DestinationConfig|null $DestinationConfig
 */
class UpdateFunctionEventInvokeConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null,
     *     MaximumRetryAttempts?: int<0, 2>|null,
     *     MaximumEventAgeInSeconds?: int<60, 21600>|null,
     *     DestinationConfig?: Shapes\DestinationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
