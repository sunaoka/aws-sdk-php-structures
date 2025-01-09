<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyDetectorName
 * @property string $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfigSummary $AnomalyDetectorConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING' $Status
 * @property string $FailureReason
 * @property string $KmsKeyArn
 * @property 'ACTIVATION_FAILURE'|'BACK_TEST_ACTIVATION_FAILURE'|'DELETION_FAILURE'|'DEACTIVATION_FAILURE' $FailureType
 */
class DescribeAnomalyDetectorResponse extends Response
{
}
