<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventBusArn
 * @property Shapes\InvokeConfiguration $InvokeConfiguration
 * @property string|null $Description
 * @property Shapes\FilterConfiguration|null $FilterConfiguration
 * @property 'FIFO'|'UNORDERED'|null $Type
 * @property 'LATEST'|'POINT_IN_TIME'|null $StartingPosition
 * @property Shapes\PointInTimeConfiguration|null $PointInTimeConfiguration
 * @property Shapes\BatchConfiguration|null $BatchConfiguration
 * @property Shapes\Transformer|null $Transformer
 * @property Shapes\RetryPolicy|null $RetryPolicy
 * @property Shapes\OnFailureConfiguration|null $OnFailureConfiguration
 * @property Shapes\LogConfiguration|null $LogConfiguration
 * @property 'RUNNING'|'STOPPED'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusArn: string,
     *     InvokeConfiguration: Shapes\InvokeConfiguration,
     *     Description?: string|null,
     *     FilterConfiguration?: Shapes\FilterConfiguration|null,
     *     Type?: 'FIFO'|'UNORDERED'|null,
     *     StartingPosition?: 'LATEST'|'POINT_IN_TIME'|null,
     *     PointInTimeConfiguration?: Shapes\PointInTimeConfiguration|null,
     *     BatchConfiguration?: Shapes\BatchConfiguration|null,
     *     Transformer?: Shapes\Transformer|null,
     *     RetryPolicy?: Shapes\RetryPolicy|null,
     *     OnFailureConfiguration?: Shapes\OnFailureConfiguration|null,
     *     LogConfiguration?: Shapes\LogConfiguration|null,
     *     State?: 'RUNNING'|'STOPPED'|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
