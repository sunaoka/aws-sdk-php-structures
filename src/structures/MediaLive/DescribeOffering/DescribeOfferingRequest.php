<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OfferingId
 */
class DescribeOfferingRequest extends Request
{
    /**
     * @param array{OfferingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
