<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EmailAddressId
 */
class DescribeEmailAddressRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EmailAddressId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
