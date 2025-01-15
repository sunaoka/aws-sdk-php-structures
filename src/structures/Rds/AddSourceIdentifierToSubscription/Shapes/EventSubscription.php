<?php

namespace Sunaoka\Aws\Structures\Rds\AddSourceIdentifierToSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerAwsId
 * @property string|null $CustSubscriptionId
 * @property string|null $SnsTopicArn
 * @property string|null $Status
 * @property string|null $SubscriptionCreationTime
 * @property string|null $SourceType
 * @property list<string>|null $SourceIdsList
 * @property list<string>|null $EventCategoriesList
 * @property bool|null $Enabled
 * @property string|null $EventSubscriptionArn
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     CustomerAwsId?: string|null,
     *     CustSubscriptionId?: string|null,
     *     SnsTopicArn?: string|null,
     *     Status?: string|null,
     *     SubscriptionCreationTime?: string|null,
     *     SourceType?: string|null,
     *     SourceIdsList?: list<string>|null,
     *     EventCategoriesList?: list<string>|null,
     *     Enabled?: bool|null,
     *     EventSubscriptionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
