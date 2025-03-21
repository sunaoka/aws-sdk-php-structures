<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeTagOptionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
