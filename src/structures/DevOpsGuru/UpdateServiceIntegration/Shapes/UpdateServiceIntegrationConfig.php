<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpsCenterIntegrationConfig|null $OpsCenter
 * @property LogsAnomalyDetectionIntegrationConfig|null $LogsAnomalyDetection
 * @property KMSServerSideEncryptionIntegrationConfig|null $KMSServerSideEncryption
 */
class UpdateServiceIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     OpsCenter?: OpsCenterIntegrationConfig|null,
     *     LogsAnomalyDetection?: LogsAnomalyDetectionIntegrationConfig|null,
     *     KMSServerSideEncryption?: KMSServerSideEncryptionIntegrationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
