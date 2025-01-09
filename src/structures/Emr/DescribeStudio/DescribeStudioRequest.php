<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 */
class DescribeStudioRequest extends Request
{
    /**
     * @param array{StudioId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
