<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Source $source
 * @property string $instanceId
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT' $scriptType
 * @property string $command
 * @property int<60, 28800> $executionTimeoutSeconds
 * @property string $outputS3BucketName
 */
class SSMValidationParameters extends Shape
{
    /**
     * @param array{
     *     source?: Source,
     *     instanceId?: string,
     *     scriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT',
     *     command?: string,
     *     executionTimeoutSeconds?: int<60, 28800>,
     *     outputS3BucketName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
