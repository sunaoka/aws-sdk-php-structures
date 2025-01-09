<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SNSTopicPublishAction $sns
 * @property IotTopicPublishAction $iotTopicPublish
 * @property LambdaAction $lambda
 * @property IotEventsAction $iotEvents
 * @property SqsAction $sqs
 * @property FirehoseAction $firehose
 * @property DynamoDBAction $dynamoDB
 * @property DynamoDBv2Action $dynamoDBv2
 * @property IotSiteWiseAction $iotSiteWise
 */
class AlarmAction extends Shape
{
    /**
     * @param array{
     *     sns?: SNSTopicPublishAction,
     *     iotTopicPublish?: IotTopicPublishAction,
     *     lambda?: LambdaAction,
     *     iotEvents?: IotEventsAction,
     *     sqs?: SqsAction,
     *     firehose?: FirehoseAction,
     *     dynamoDB?: DynamoDBAction,
     *     dynamoDBv2?: DynamoDBv2Action,
     *     iotSiteWise?: IotSiteWiseAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
