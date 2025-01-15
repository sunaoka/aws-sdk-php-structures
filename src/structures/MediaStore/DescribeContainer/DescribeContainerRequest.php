<?php

namespace Sunaoka\Aws\Structures\MediaStore\DescribeContainer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContainerName
 */
class DescribeContainerRequest extends Request
{
    /**
     * @param array{ContainerName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
