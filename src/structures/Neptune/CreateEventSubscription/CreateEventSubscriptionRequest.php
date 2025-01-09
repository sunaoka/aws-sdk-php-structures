<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string $SnsTopicArn
 * @property string $SourceType
 * @property list<string> $EventCategories
 * @property list<string> $SourceIds
 * @property bool $Enabled
 * @property list<Shapes\Tag> $Tags
 */
class CreateEventSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SnsTopicArn: string,
     *     SourceType?: string,
     *     EventCategories?: list<string>,
     *     SourceIds?: list<string>,
     *     Enabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
