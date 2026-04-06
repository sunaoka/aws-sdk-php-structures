<?php

namespace Sunaoka\Aws\Structures\Mobile\DescribeBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 */
class DescribeBundleRequest extends Request
{
    /**
     * @param array{bundleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
