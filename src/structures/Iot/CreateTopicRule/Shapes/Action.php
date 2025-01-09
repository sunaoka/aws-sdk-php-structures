<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamoDBAction $dynamoDB
 * @property DynamoDBv2Action $dynamoDBv2
 * @property LambdaAction $lambda
 * @property SnsAction $sns
 * @property SqsAction $sqs
 * @property KinesisAction $kinesis
 * @property RepublishAction $republish
 * @property S3Action $s3
 * @property FirehoseAction $firehose
 * @property CloudwatchMetricAction $cloudwatchMetric
 * @property CloudwatchAlarmAction $cloudwatchAlarm
 * @property CloudwatchLogsAction $cloudwatchLogs
 * @property ElasticsearchAction $elasticsearch
 * @property SalesforceAction $salesforce
 * @property IotAnalyticsAction $iotAnalytics
 * @property IotEventsAction $iotEvents
 * @property IotSiteWiseAction $iotSiteWise
 * @property StepFunctionsAction $stepFunctions
 * @property TimestreamAction $timestream
 * @property HttpAction $http
 * @property KafkaAction $kafka
 * @property OpenSearchAction $openSearch
 * @property LocationAction $location
 */
class Action extends Shape
{
    /**
     * @param array{
     *     dynamoDB?: DynamoDBAction,
     *     dynamoDBv2?: DynamoDBv2Action,
     *     lambda?: LambdaAction,
     *     sns?: SnsAction,
     *     sqs?: SqsAction,
     *     kinesis?: KinesisAction,
     *     republish?: RepublishAction,
     *     s3?: S3Action,
     *     firehose?: FirehoseAction,
     *     cloudwatchMetric?: CloudwatchMetricAction,
     *     cloudwatchAlarm?: CloudwatchAlarmAction,
     *     cloudwatchLogs?: CloudwatchLogsAction,
     *     elasticsearch?: ElasticsearchAction,
     *     salesforce?: SalesforceAction,
     *     iotAnalytics?: IotAnalyticsAction,
     *     iotEvents?: IotEventsAction,
     *     iotSiteWise?: IotSiteWiseAction,
     *     stepFunctions?: StepFunctionsAction,
     *     timestream?: TimestreamAction,
     *     http?: HttpAction,
     *     kafka?: KafkaAction,
     *     openSearch?: OpenSearchAction,
     *     location?: LocationAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
