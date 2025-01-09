<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property bool $Resolved
 */
class DescribeAccountCustomizationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string,
     *     Resolved?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
