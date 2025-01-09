<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeHarvestJobRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
