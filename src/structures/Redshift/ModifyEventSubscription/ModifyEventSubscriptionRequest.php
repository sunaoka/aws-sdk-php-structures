<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string|null $SnsTopicArn
 * @property string|null $SourceType
 * @property list<string>|null $SourceIds
 * @property list<string>|null $EventCategories
 * @property string|null $Severity
 * @property bool|null $Enabled
 */
class ModifyEventSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SnsTopicArn?: string|null,
     *     SourceType?: string|null,
     *     SourceIds?: list<string>|null,
     *     EventCategories?: list<string>|null,
     *     Severity?: string|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
