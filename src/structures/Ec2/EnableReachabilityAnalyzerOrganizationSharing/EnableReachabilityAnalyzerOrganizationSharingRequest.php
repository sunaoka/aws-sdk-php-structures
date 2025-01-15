<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableReachabilityAnalyzerOrganizationSharing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 */
class EnableReachabilityAnalyzerOrganizationSharingRequest extends Request
{
    /**
     * @param array{DryRun?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
