<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property Shapes\VerifiedAccessLogOptions $AccessLogs
 * @property bool $DryRun
 * @property string $ClientToken
 */
class ModifyVerifiedAccessInstanceLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     AccessLogs: Shapes\VerifiedAccessLogOptions,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
