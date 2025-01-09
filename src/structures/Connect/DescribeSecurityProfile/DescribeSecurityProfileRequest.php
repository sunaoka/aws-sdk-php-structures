<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileId
 * @property string $InstanceId
 */
class DescribeSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
