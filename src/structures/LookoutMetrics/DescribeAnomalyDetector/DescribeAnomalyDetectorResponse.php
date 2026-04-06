<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AnomalyDetectorArn
 * @property string|null $AnomalyDetectorName
 * @property string|null $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfigSummary|null $AnomalyDetectorConfig
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING'|null $Status
 * @property string|null $FailureReason
 * @property string|null $KmsKeyArn
 * @property 'ACTIVATION_FAILURE'|'BACK_TEST_ACTIVATION_FAILURE'|'DELETION_FAILURE'|'DEACTIVATION_FAILURE'|null $FailureType
 */
class DescribeAnomalyDetectorResponse extends Response
{
}
