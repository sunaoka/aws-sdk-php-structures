<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $otaUpdateId
 * @property string $description
 * @property list<string> $targets
 * @property list<'MQTT'|'HTTP'> $protocols
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property Shapes\AwsJobExecutionsRolloutConfig $awsJobExecutionsRolloutConfig
 * @property Shapes\AwsJobPresignedUrlConfig $awsJobPresignedUrlConfig
 * @property Shapes\AwsJobAbortConfig $awsJobAbortConfig
 * @property Shapes\AwsJobTimeoutConfig $awsJobTimeoutConfig
 * @property list<Shapes\OTAUpdateFile> $files
 * @property string $roleArn
 * @property array<string, string> $additionalParameters
 * @property list<Shapes\Tag> $tags
 */
class CreateOTAUpdateRequest extends Request
{
    /**
     * @param array{
     *     otaUpdateId: string,
     *     description?: string,
     *     targets: list<string>,
     *     protocols?: list<'MQTT'|'HTTP'>,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     awsJobExecutionsRolloutConfig?: Shapes\AwsJobExecutionsRolloutConfig,
     *     awsJobPresignedUrlConfig?: Shapes\AwsJobPresignedUrlConfig,
     *     awsJobAbortConfig?: Shapes\AwsJobAbortConfig,
     *     awsJobTimeoutConfig?: Shapes\AwsJobTimeoutConfig,
     *     files: list<Shapes\OTAUpdateFile>,
     *     roleArn: string,
     *     additionalParameters?: array<string, string>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
