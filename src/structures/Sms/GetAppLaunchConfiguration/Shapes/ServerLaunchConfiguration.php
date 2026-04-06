<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server|null $server
 * @property string|null $logicalId
 * @property string|null $vpc
 * @property string|null $subnet
 * @property string|null $securityGroup
 * @property string|null $ec2KeyName
 * @property UserData|null $userData
 * @property string|null $instanceType
 * @property bool|null $associatePublicIpAddress
 * @property string|null $iamInstanceProfileName
 * @property S3Location|null $configureScript
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null $configureScriptType
 */
class ServerLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server|null,
     *     logicalId?: string|null,
     *     vpc?: string|null,
     *     subnet?: string|null,
     *     securityGroup?: string|null,
     *     ec2KeyName?: string|null,
     *     userData?: UserData|null,
     *     instanceType?: string|null,
     *     associatePublicIpAddress?: bool|null,
     *     iamInstanceProfileName?: string|null,
     *     configureScript?: S3Location|null,
     *     configureScriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
