<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 */
class DescribeApplicationInstanceRequest extends Request
{
    /**
     * @param array{ApplicationInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
