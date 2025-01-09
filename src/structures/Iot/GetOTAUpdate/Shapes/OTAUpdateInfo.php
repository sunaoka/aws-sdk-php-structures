<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $otaUpdateId
 * @property string $otaUpdateArn
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property string $description
 * @property list<string> $targets
 * @property list<'MQTT'|'HTTP'> $protocols
 * @property AwsJobExecutionsRolloutConfig $awsJobExecutionsRolloutConfig
 * @property AwsJobPresignedUrlConfig $awsJobPresignedUrlConfig
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property list<OTAUpdateFile> $otaUpdateFiles
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $otaUpdateStatus
 * @property string $awsIotJobId
 * @property string $awsIotJobArn
 * @property ErrorInfo $errorInfo
 * @property array<string, string> $additionalParameters
 */
class OTAUpdateInfo extends Shape
{
    /**
     * @param array{
     *     otaUpdateId?: string,
     *     otaUpdateArn?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     targets?: list<string>,
     *     protocols?: list<'MQTT'|'HTTP'>,
     *     awsJobExecutionsRolloutConfig?: AwsJobExecutionsRolloutConfig,
     *     awsJobPresignedUrlConfig?: AwsJobPresignedUrlConfig,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     otaUpdateFiles?: list<OTAUpdateFile>,
     *     otaUpdateStatus?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     awsIotJobId?: string,
     *     awsIotJobArn?: string,
     *     errorInfo?: ErrorInfo,
     *     additionalParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
