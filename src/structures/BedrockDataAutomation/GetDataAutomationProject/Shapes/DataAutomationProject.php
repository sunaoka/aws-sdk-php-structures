<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $projectName
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 * @property 'ASYNC'|'SYNC'|null $projectType
 * @property string|null $projectDescription
 * @property StandardOutputConfiguration|null $standardOutputConfiguration
 * @property CustomOutputConfiguration|null $customOutputConfiguration
 * @property OverrideConfiguration|null $overrideConfiguration
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $status
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $kmsEncryptionContext
 */
class DataAutomationProject extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     projectName: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     projectType?: 'ASYNC'|'SYNC'|null,
     *     projectDescription?: string|null,
     *     standardOutputConfiguration?: StandardOutputConfiguration|null,
     *     customOutputConfiguration?: CustomOutputConfiguration|null,
     *     overrideConfiguration?: OverrideConfiguration|null,
     *     status: 'COMPLETED'|'IN_PROGRESS'|'FAILED',
     *     kmsKeyId?: string|null,
     *     kmsEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
