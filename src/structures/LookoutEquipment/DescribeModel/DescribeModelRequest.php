<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DescribeModelRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
