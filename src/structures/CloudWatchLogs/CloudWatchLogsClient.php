<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs;

class CloudWatchLogsClient extends \Aws\CloudWatchLogs\CloudWatchLogsClient
{
    use AssociateKmsKey\AssociateKmsKeyTrait;
    use CancelExportTask\CancelExportTaskTrait;
    use CreateExportTask\CreateExportTaskTrait;
    use CreateLogGroup\CreateLogGroupTrait;
    use CreateLogStream\CreateLogStreamTrait;
    use DeleteAccountPolicy\DeleteAccountPolicyTrait;
    use DeleteDataProtectionPolicy\DeleteDataProtectionPolicyTrait;
    use DeleteDestination\DeleteDestinationTrait;
    use DeleteLogGroup\DeleteLogGroupTrait;
    use DeleteLogStream\DeleteLogStreamTrait;
    use DeleteMetricFilter\DeleteMetricFilterTrait;
    use DeleteQueryDefinition\DeleteQueryDefinitionTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRetentionPolicy\DeleteRetentionPolicyTrait;
    use DeleteSubscriptionFilter\DeleteSubscriptionFilterTrait;
    use DescribeAccountPolicies\DescribeAccountPoliciesTrait;
    use DescribeDestinations\DescribeDestinationsTrait;
    use DescribeExportTasks\DescribeExportTasksTrait;
    use DescribeLogGroups\DescribeLogGroupsTrait;
    use DescribeLogStreams\DescribeLogStreamsTrait;
    use DescribeMetricFilters\DescribeMetricFiltersTrait;
    use DescribeQueries\DescribeQueriesTrait;
    use DescribeQueryDefinitions\DescribeQueryDefinitionsTrait;
    use DescribeResourcePolicies\DescribeResourcePoliciesTrait;
    use DescribeSubscriptionFilters\DescribeSubscriptionFiltersTrait;
    use DisassociateKmsKey\DisassociateKmsKeyTrait;
    use FilterLogEvents\FilterLogEventsTrait;
    use GetDataProtectionPolicy\GetDataProtectionPolicyTrait;
    use GetLogEvents\GetLogEventsTrait;
    use GetLogGroupFields\GetLogGroupFieldsTrait;
    use GetLogRecord\GetLogRecordTrait;
    use GetQueryResults\GetQueryResultsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTagsLogGroup\ListTagsLogGroupTrait;
    use PutAccountPolicy\PutAccountPolicyTrait;
    use PutDataProtectionPolicy\PutDataProtectionPolicyTrait;
    use PutDestination\PutDestinationTrait;
    use PutDestinationPolicy\PutDestinationPolicyTrait;
    use PutLogEvents\PutLogEventsTrait;
    use PutMetricFilter\PutMetricFilterTrait;
    use PutQueryDefinition\PutQueryDefinitionTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutRetentionPolicy\PutRetentionPolicyTrait;
    use PutSubscriptionFilter\PutSubscriptionFilterTrait;
    use StartQuery\StartQueryTrait;
    use StopQuery\StopQueryTrait;
    use TagLogGroup\TagLogGroupTrait;
    use TagResource\TagResourceTrait;
    use TestMetricFilter\TestMetricFilterTrait;
    use UntagLogGroup\UntagLogGroupTrait;
    use UntagResource\UntagResourceTrait;
}
