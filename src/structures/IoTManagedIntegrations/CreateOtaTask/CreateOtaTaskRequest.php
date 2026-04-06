<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $S3Url
 * @property 'HTTP'|null $Protocol
 * @property list<string>|null $Target
 * @property string|null $TaskConfigurationId
 * @property 'PUSH'|null $OtaMechanism
 * @property 'ONE_TIME'|'CONTINUOUS' $OtaType
 * @property string|null $OtaTargetQueryString
 * @property string|null $ClientToken
 * @property Shapes\OtaTaskSchedulingConfig|null $OtaSchedulingConfig
 * @property Shapes\OtaTaskExecutionRetryConfig|null $OtaTaskExecutionRetryConfig
 * @property array<string, string>|null $Tags
 */
class CreateOtaTaskRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     S3Url: string,
     *     Protocol?: 'HTTP'|null,
     *     Target?: list<string>|null,
     *     TaskConfigurationId?: string|null,
     *     OtaMechanism?: 'PUSH'|null,
     *     OtaType: 'ONE_TIME'|'CONTINUOUS',
     *     OtaTargetQueryString?: string|null,
     *     ClientToken?: string|null,
     *     OtaSchedulingConfig?: Shapes\OtaTaskSchedulingConfig|null,
     *     OtaTaskExecutionRetryConfig?: Shapes\OtaTaskExecutionRetryConfig|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
