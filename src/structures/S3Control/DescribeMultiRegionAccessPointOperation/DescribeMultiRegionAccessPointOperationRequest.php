<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RequestTokenARN
 */
class DescribeMultiRegionAccessPointOperationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RequestTokenARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
