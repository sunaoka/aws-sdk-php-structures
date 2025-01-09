<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEventSubscription\Shapes;

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
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
