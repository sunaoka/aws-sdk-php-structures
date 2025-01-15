<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Source|null $source
 * @property string|null $instanceId
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null $scriptType
 * @property string|null $command
 * @property int<60, 28800>|null $executionTimeoutSeconds
 * @property string|null $outputS3BucketName
 */
class SSMValidationParameters extends Shape
{
    /**
     * @param array{
     *     source?: Source|null,
     *     instanceId?: string|null,
     *     scriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null,
     *     command?: string|null,
     *     executionTimeoutSeconds?: int<60, 28800>|null,
     *     outputS3BucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
