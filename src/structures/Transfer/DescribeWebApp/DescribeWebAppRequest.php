<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 */
class DescribeWebAppRequest extends Request
{
    /**
     * @param array{WebAppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
