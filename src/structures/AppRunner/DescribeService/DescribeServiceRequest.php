<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 */
class DescribeServiceRequest extends Request
{
    /**
     * @param array{ServiceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
