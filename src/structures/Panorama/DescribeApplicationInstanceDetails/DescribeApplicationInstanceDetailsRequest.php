<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 */
class DescribeApplicationInstanceDetailsRequest extends Request
{
    /**
     * @param array{ApplicationInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
