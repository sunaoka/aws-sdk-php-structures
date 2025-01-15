<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustSubscriptionId
 * @property string|null $CustomerAwsId
 * @property bool|null $Enabled
 * @property list<string>|null $EventCategoriesList
 * @property string|null $EventSubscriptionArn
 * @property string|null $SnsTopicArn
 * @property list<string>|null $SourceIdsList
 * @property string|null $SourceType
 * @property string|null $Status
 * @property string|null $SubscriptionCreationTime
 */
class AwsRdsEventSubscriptionDetails extends Shape
{
    /**
     * @param array{
     *     CustSubscriptionId?: string|null,
     *     CustomerAwsId?: string|null,
     *     Enabled?: bool|null,
     *     EventCategoriesList?: list<string>|null,
     *     EventSubscriptionArn?: string|null,
     *     SnsTopicArn?: string|null,
     *     SourceIdsList?: list<string>|null,
     *     SourceType?: string|null,
     *     Status?: string|null,
     *     SubscriptionCreationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
