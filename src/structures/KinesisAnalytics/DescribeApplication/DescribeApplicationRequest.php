<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{ApplicationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
