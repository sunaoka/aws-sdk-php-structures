<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpsCenterIntegration|null $OpsCenter
 * @property LogsAnomalyDetectionIntegration|null $LogsAnomalyDetection
 * @property KMSServerSideEncryptionIntegration|null $KMSServerSideEncryption
 */
class ServiceIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     OpsCenter?: OpsCenterIntegration|null,
     *     LogsAnomalyDetection?: LogsAnomalyDetectionIntegration|null,
     *     KMSServerSideEncryption?: KMSServerSideEncryptionIntegration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
