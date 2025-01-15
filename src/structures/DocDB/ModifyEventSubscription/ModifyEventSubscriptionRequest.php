<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string|null $SnsTopicArn
 * @property string|null $SourceType
 * @property list<string>|null $EventCategories
 * @property bool|null $Enabled
 */
class ModifyEventSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SnsTopicArn?: string|null,
     *     SourceType?: string|null,
     *     EventCategories?: list<string>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
