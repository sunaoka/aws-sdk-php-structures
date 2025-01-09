<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertArn
 */
class DescribeAlertRequest extends Request
{
    /**
     * @param array{AlertArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
