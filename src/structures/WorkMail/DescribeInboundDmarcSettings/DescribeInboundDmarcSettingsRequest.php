<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeInboundDmarcSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DescribeInboundDmarcSettingsRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
