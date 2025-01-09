<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DescribeResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
