<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetVariableAction $setVariable
 * @property SNSTopicPublishAction $sns
 * @property IotTopicPublishAction $iotTopicPublish
 * @property SetTimerAction $setTimer
 * @property ClearTimerAction $clearTimer
 * @property ResetTimerAction $resetTimer
 * @property LambdaAction $lambda
 * @property IotEventsAction $iotEvents
 * @property SqsAction $sqs
 * @property FirehoseAction $firehose
 * @property DynamoDBAction $dynamoDB
 * @property DynamoDBv2Action $dynamoDBv2
 * @property IotSiteWiseAction $iotSiteWise
 */
class Action extends Shape
{
    /**
     * @param array{
     *     setVariable?: SetVariableAction,
     *     sns?: SNSTopicPublishAction,
     *     iotTopicPublish?: IotTopicPublishAction,
     *     setTimer?: SetTimerAction,
     *     clearTimer?: ClearTimerAction,
     *     resetTimer?: ResetTimerAction,
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
