<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEventSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomerAwsId
 * @property string $CustSubscriptionId
 * @property string $SnsTopicArn
 * @property string $Status
 * @property string $SubscriptionCreationTime
 * @property string $SourceType
 * @property list<string> $SourceIdsList
 * @property list<string> $EventCategoriesList
 * @property bool $Enabled
 * @property string $EventSubscriptionArn
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     CustomerAwsId?: string,
     *     CustSubscriptionId?: string,
     *     SnsTopicArn?: string,
     *     Status?: string,
     *     SubscriptionCreationTime?: string,
     *     SourceType?: string,
     *     SourceIdsList?: list<string>,
     *     EventCategoriesList?: list<string>,
     *     Enabled?: bool,
     *     EventSubscriptionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
