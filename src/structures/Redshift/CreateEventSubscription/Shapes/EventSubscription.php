<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEventSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomerAwsId
 * @property string $CustSubscriptionId
 * @property string $SnsTopicArn
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $SubscriptionCreationTime
 * @property string $SourceType
 * @property list<string> $SourceIdsList
 * @property list<string> $EventCategoriesList
 * @property string $Severity
 * @property bool $Enabled
 * @property list<Tag> $Tags
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     CustomerAwsId?: string,
     *     CustSubscriptionId?: string,
     *     SnsTopicArn?: string,
     *     Status?: string,
     *     SubscriptionCreationTime?: \Aws\Api\DateTimeResult,
     *     SourceType?: string,
     *     SourceIdsList?: list<string>,
     *     EventCategoriesList?: list<string>,
     *     Severity?: string,
     *     Enabled?: bool,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
