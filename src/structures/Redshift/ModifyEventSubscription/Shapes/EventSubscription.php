<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEventSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerAwsId
 * @property string|null $CustSubscriptionId
 * @property string|null $SnsTopicArn
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $SubscriptionCreationTime
 * @property string|null $SourceType
 * @property list<string>|null $SourceIdsList
 * @property list<string>|null $EventCategoriesList
 * @property string|null $Severity
 * @property bool|null $Enabled
 * @property list<Tag>|null $Tags
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     CustomerAwsId?: string|null,
     *     CustSubscriptionId?: string|null,
     *     SnsTopicArn?: string|null,
     *     Status?: string|null,
     *     SubscriptionCreationTime?: \Aws\Api\DateTimeResult|null,
     *     SourceType?: string|null,
     *     SourceIdsList?: list<string>|null,
     *     EventCategoriesList?: list<string>|null,
     *     Severity?: string|null,
     *     Enabled?: bool|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
