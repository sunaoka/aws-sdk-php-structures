<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OfferingArn
 */
class DescribeOfferingRequest extends Request
{
    /**
     * @param array{OfferingArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
