<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableReachabilityAnalyzerOrganizationSharing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class EnableReachabilityAnalyzerOrganizationSharingRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
