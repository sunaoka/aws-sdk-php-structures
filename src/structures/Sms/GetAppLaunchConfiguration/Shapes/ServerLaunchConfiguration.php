<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server $server
 * @property string $logicalId
 * @property string $vpc
 * @property string $subnet
 * @property string $securityGroup
 * @property string $ec2KeyName
 * @property UserData $userData
 * @property string $instanceType
 * @property bool $associatePublicIpAddress
 * @property string $iamInstanceProfileName
 * @property S3Location $configureScript
 * @property 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT' $configureScriptType
 */
class ServerLaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server,
     *     logicalId?: string,
     *     vpc?: string,
     *     subnet?: string,
     *     securityGroup?: string,
     *     ec2KeyName?: string,
     *     userData?: UserData,
     *     instanceType?: string,
     *     associatePublicIpAddress?: bool,
     *     iamInstanceProfileName?: string,
     *     configureScript?: S3Location,
     *     configureScriptType?: 'SHELL_SCRIPT'|'POWERSHELL_SCRIPT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
