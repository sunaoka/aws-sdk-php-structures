<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property bool $DefaultKeyOnly
 */
class DescribeKeyRegistrationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DefaultKeyOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
