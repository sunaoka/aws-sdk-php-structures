<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DescribeNamespaceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
