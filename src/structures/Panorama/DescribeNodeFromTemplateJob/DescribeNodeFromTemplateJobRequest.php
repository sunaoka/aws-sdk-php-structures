<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNodeFromTemplateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeNodeFromTemplateJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
