<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property bool $DryRun
 */
class ExportVerifiedAccessInstanceClientConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
