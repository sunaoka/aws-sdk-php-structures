<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $otaUpdateId
 * @property string|null $description
 * @property list<string> $targets
 * @property list<'MQTT'|'HTTP'>|null $protocols
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property Shapes\AwsJobExecutionsRolloutConfig|null $awsJobExecutionsRolloutConfig
 * @property Shapes\AwsJobPresignedUrlConfig|null $awsJobPresignedUrlConfig
 * @property Shapes\AwsJobAbortConfig|null $awsJobAbortConfig
 * @property Shapes\AwsJobTimeoutConfig|null $awsJobTimeoutConfig
 * @property list<Shapes\OTAUpdateFile> $files
 * @property string $roleArn
 * @property array<string, string>|null $additionalParameters
 * @property list<Shapes\Tag>|null $tags
 */
class CreateOTAUpdateRequest extends Request
{
    /**
     * @param array{
     *     otaUpdateId: string,
     *     description?: string|null,
     *     targets: list<string>,
     *     protocols?: list<'MQTT'|'HTTP'>|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     awsJobExecutionsRolloutConfig?: Shapes\AwsJobExecutionsRolloutConfig|null,
     *     awsJobPresignedUrlConfig?: Shapes\AwsJobPresignedUrlConfig|null,
     *     awsJobAbortConfig?: Shapes\AwsJobAbortConfig|null,
     *     awsJobTimeoutConfig?: Shapes\AwsJobTimeoutConfig|null,
     *     files: list<Shapes\OTAUpdateFile>,
     *     roleArn: string,
     *     additionalParameters?: array<string, string>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
