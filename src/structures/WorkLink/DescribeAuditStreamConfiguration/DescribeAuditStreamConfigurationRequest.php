<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeAuditStreamConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DescribeAuditStreamConfigurationRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
