<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetVariableAction|null $setVariable
 * @property SNSTopicPublishAction|null $sns
 * @property IotTopicPublishAction|null $iotTopicPublish
 * @property SetTimerAction|null $setTimer
 * @property ClearTimerAction|null $clearTimer
 * @property ResetTimerAction|null $resetTimer
 * @property LambdaAction|null $lambda
 * @property IotEventsAction|null $iotEvents
 * @property SqsAction|null $sqs
 * @property FirehoseAction|null $firehose
 * @property DynamoDBAction|null $dynamoDB
 * @property DynamoDBv2Action|null $dynamoDBv2
 * @property IotSiteWiseAction|null $iotSiteWise
 */
class Action extends Shape
{
    /**
     * @param array{
     *     setVariable?: SetVariableAction|null,
     *     sns?: SNSTopicPublishAction|null,
     *     iotTopicPublish?: IotTopicPublishAction|null,
     *     setTimer?: SetTimerAction|null,
     *     clearTimer?: ClearTimerAction|null,
     *     resetTimer?: ResetTimerAction|null,
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
