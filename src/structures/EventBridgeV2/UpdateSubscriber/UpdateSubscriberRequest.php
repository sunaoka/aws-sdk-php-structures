<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriberArn
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|null $State
 * @property 'LAST_PROCESSED'|'LATEST'|null $ResumePosition
 * @property Shapes\UpdateInvokeConfiguration|null $InvokeConfiguration
 * @property Shapes\FilterConfiguration|null $FilterConfiguration
 * @property Shapes\BatchConfiguration|null $BatchConfiguration
 * @property Shapes\Transformer|null $Transformer
 * @property Shapes\RetryPolicy|null $RetryPolicy
 * @property Shapes\OnFailureConfiguration|null $OnFailureConfiguration
 * @property Shapes\LogConfiguration|null $LogConfiguration
 */
class UpdateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     SubscriberArn: string,
     *     Description?: string|null,
     *     State?: 'RUNNING'|'STOPPED'|null,
     *     ResumePosition?: 'LAST_PROCESSED'|'LATEST'|null,
     *     InvokeConfiguration?: Shapes\UpdateInvokeConfiguration|null,
     *     FilterConfiguration?: Shapes\FilterConfiguration|null,
     *     BatchConfiguration?: Shapes\BatchConfiguration|null,
     *     Transformer?: Shapes\Transformer|null,
     *     RetryPolicy?: Shapes\RetryPolicy|null,
     *     OnFailureConfiguration?: Shapes\OnFailureConfiguration|null,
     *     LogConfiguration?: Shapes\LogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
