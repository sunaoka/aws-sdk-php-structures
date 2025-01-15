<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $Namespace
 * @property bool|null $Resolved
 */
class DescribeAccountCustomizationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string|null,
     *     Resolved?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
