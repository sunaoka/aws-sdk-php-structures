<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $OperationId
 */
class DescribeApplicationOperationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     OperationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
