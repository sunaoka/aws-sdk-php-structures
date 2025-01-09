<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpsCenterIntegration $OpsCenter
 * @property LogsAnomalyDetectionIntegration $LogsAnomalyDetection
 * @property KMSServerSideEncryptionIntegration $KMSServerSideEncryption
 */
class ServiceIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     OpsCenter?: OpsCenterIntegration,
     *     LogsAnomalyDetection?: LogsAnomalyDetectionIntegration,
     *     KMSServerSideEncryption?: KMSServerSideEncryptionIntegration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
