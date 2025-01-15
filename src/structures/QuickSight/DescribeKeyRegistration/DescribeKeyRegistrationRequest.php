<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property bool|null $DefaultKeyOnly
 */
class DescribeKeyRegistrationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DefaultKeyOnly?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
