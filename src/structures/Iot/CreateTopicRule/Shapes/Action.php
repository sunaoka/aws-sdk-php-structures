<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamoDBAction|null $dynamoDB
 * @property DynamoDBv2Action|null $dynamoDBv2
 * @property LambdaAction|null $lambda
 * @property SnsAction|null $sns
 * @property SqsAction|null $sqs
 * @property KinesisAction|null $kinesis
 * @property RepublishAction|null $republish
 * @property S3Action|null $s3
 * @property FirehoseAction|null $firehose
 * @property CloudwatchMetricAction|null $cloudwatchMetric
 * @property CloudwatchAlarmAction|null $cloudwatchAlarm
 * @property CloudwatchLogsAction|null $cloudwatchLogs
 * @property ElasticsearchAction|null $elasticsearch
 * @property SalesforceAction|null $salesforce
 * @property IotAnalyticsAction|null $iotAnalytics
 * @property IotEventsAction|null $iotEvents
 * @property IotSiteWiseAction|null $iotSiteWise
 * @property StepFunctionsAction|null $stepFunctions
 * @property TimestreamAction|null $timestream
 * @property HttpAction|null $http
 * @property KafkaAction|null $kafka
 * @property OpenSearchAction|null $openSearch
 * @property LocationAction|null $location
 */
class Action extends Shape
{
    /**
     * @param array{
     *     dynamoDB?: DynamoDBAction|null,
     *     dynamoDBv2?: DynamoDBv2Action|null,
     *     lambda?: LambdaAction|null,
     *     sns?: SnsAction|null,
     *     sqs?: SqsAction|null,
     *     kinesis?: KinesisAction|null,
     *     republish?: RepublishAction|null,
     *     s3?: S3Action|null,
     *     firehose?: FirehoseAction|null,
     *     cloudwatchMetric?: CloudwatchMetricAction|null,
     *     cloudwatchAlarm?: CloudwatchAlarmAction|null,
     *     cloudwatchLogs?: CloudwatchLogsAction|null,
     *     elasticsearch?: ElasticsearchAction|null,
     *     salesforce?: SalesforceAction|null,
     *     iotAnalytics?: IotAnalyticsAction|null,
     *     iotEvents?: IotEventsAction|null,
     *     iotSiteWise?: IotSiteWiseAction|null,
     *     stepFunctions?: StepFunctionsAction|null,
     *     timestream?: TimestreamAction|null,
     *     http?: HttpAction|null,
     *     kafka?: KafkaAction|null,
     *     openSearch?: OpenSearchAction|null,
     *     location?: LocationAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
