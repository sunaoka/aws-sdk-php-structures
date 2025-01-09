<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 */
class DescribeSecurityProfileRequest extends Request
{
    /**
     * @param array{securityProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
