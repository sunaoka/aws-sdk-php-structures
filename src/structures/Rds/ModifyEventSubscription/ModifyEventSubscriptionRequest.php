<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string $SnsTopicArn
 * @property string $SourceType
 * @property list<string> $EventCategories
 * @property bool $Enabled
 */
class ModifyEventSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SnsTopicArn?: string,
     *     SourceType?: string,
     *     EventCategories?: list<string>,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
