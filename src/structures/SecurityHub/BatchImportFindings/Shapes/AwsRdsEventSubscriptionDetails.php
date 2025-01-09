<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustSubscriptionId
 * @property string $CustomerAwsId
 * @property bool $Enabled
 * @property list<string> $EventCategoriesList
 * @property string $EventSubscriptionArn
 * @property string $SnsTopicArn
 * @property list<string> $SourceIdsList
 * @property string $SourceType
 * @property string $Status
 * @property string $SubscriptionCreationTime
 */
class AwsRdsEventSubscriptionDetails extends Shape
{
    /**
     * @param array{
     *     CustSubscriptionId?: string,
     *     CustomerAwsId?: string,
     *     Enabled?: bool,
     *     EventCategoriesList?: list<string>,
     *     EventSubscriptionArn?: string,
     *     SnsTopicArn?: string,
     *     SourceIdsList?: list<string>,
     *     SourceType?: string,
     *     Status?: string,
     *     SubscriptionCreationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
