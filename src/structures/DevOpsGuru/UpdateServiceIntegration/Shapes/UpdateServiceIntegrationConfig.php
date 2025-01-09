<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpsCenterIntegrationConfig $OpsCenter
 * @property LogsAnomalyDetectionIntegrationConfig $LogsAnomalyDetection
 * @property KMSServerSideEncryptionIntegrationConfig $KMSServerSideEncryption
 */
class UpdateServiceIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     OpsCenter?: OpsCenterIntegrationConfig,
     *     LogsAnomalyDetection?: LogsAnomalyDetectionIntegrationConfig,
     *     KMSServerSideEncryption?: KMSServerSideEncryptionIntegrationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
