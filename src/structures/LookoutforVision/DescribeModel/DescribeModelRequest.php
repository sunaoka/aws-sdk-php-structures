<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 */
class DescribeModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
