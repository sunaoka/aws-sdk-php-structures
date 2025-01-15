<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SNSTopicPublishAction|null $sns
 * @property IotTopicPublishAction|null $iotTopicPublish
 * @property LambdaAction|null $lambda
 * @property IotEventsAction|null $iotEvents
 * @property SqsAction|null $sqs
 * @property FirehoseAction|null $firehose
 * @property DynamoDBAction|null $dynamoDB
 * @property DynamoDBv2Action|null $dynamoDBv2
 * @property IotSiteWiseAction|null $iotSiteWise
 */
class AlarmAction extends Shape
{
    /**
     * @param array{
     *     sns?: SNSTopicPublishAction|null,
     *     iotTopicPublish?: IotTopicPublishAction|null,
     *     lambda?: LambdaAction|null,
     *     iotEvents?: IotEventsAction|null,
     *     sqs?: SqsAction|null,
     *     firehose?: FirehoseAction|null,
     *     dynamoDB?: DynamoDBAction|null,
     *     dynamoDBv2?: DynamoDBv2Action|null,
     *     iotSiteWise?: IotSiteWiseAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
