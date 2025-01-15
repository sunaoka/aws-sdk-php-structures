<?php

namespace Sunaoka\Aws\Structures\Rds\CreateEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string $SnsTopicArn
 * @property string|null $SourceType
 * @property list<string>|null $EventCategories
 * @property list<string>|null $SourceIds
 * @property bool|null $Enabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEventSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SnsTopicArn: string,
     *     SourceType?: string|null,
     *     EventCategories?: list<string>|null,
     *     SourceIds?: list<string>|null,
     *     Enabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
