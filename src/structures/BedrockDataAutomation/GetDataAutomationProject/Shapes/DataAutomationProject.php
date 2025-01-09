<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $projectName
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property string $projectDescription
 * @property StandardOutputConfiguration $standardOutputConfiguration
 * @property CustomOutputConfiguration $customOutputConfiguration
 * @property OverrideConfiguration $overrideConfiguration
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $status
 * @property string $kmsKeyId
 * @property array<string, string> $kmsEncryptionContext
 */
class DataAutomationProject extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     projectName: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE',
     *     projectDescription?: string,
     *     standardOutputConfiguration?: StandardOutputConfiguration,
     *     customOutputConfiguration?: CustomOutputConfiguration,
     *     overrideConfiguration?: OverrideConfiguration,
     *     status: 'COMPLETED'|'IN_PROGRESS'|'FAILED',
     *     kmsKeyId?: string,
     *     kmsEncryptionContext?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
