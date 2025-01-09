<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string $SnsTopicArn
 * @property string $SourceType
 * @property list<string> $SourceIds
 * @property list<string> $EventCategories
 * @property string $Severity
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
     *     SourceIds?: list<string>,
     *     EventCategories?: list<string>,
     *     Severity?: string,
     *     Enabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
