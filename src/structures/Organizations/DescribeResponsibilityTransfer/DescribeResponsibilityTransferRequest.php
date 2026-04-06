<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeResponsibilityTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeResponsibilityTransferRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
