<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $otaUpdateId
 * @property string|null $otaUpdateArn
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property string|null $description
 * @property list<string>|null $targets
 * @property list<'MQTT'|'HTTP'>|null $protocols
 * @property AwsJobExecutionsRolloutConfig|null $awsJobExecutionsRolloutConfig
 * @property AwsJobPresignedUrlConfig|null $awsJobPresignedUrlConfig
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property list<OTAUpdateFile>|null $otaUpdateFiles
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $otaUpdateStatus
 * @property string|null $awsIotJobId
 * @property string|null $awsIotJobArn
 * @property ErrorInfo|null $errorInfo
 * @property array<string, string>|null $additionalParameters
 */
class OTAUpdateInfo extends Shape
{
    /**
     * @param array{
     *     otaUpdateId?: string|null,
     *     otaUpdateArn?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     targets?: list<string>|null,
     *     protocols?: list<'MQTT'|'HTTP'>|null,
     *     awsJobExecutionsRolloutConfig?: AwsJobExecutionsRolloutConfig|null,
     *     awsJobPresignedUrlConfig?: AwsJobPresignedUrlConfig|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     otaUpdateFiles?: list<OTAUpdateFile>|null,
     *     otaUpdateStatus?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     awsIotJobId?: string|null,
     *     awsIotJobArn?: string|null,
     *     errorInfo?: ErrorInfo|null,
     *     additionalParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
