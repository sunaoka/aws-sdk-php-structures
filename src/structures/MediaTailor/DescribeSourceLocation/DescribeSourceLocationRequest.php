<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeSourceLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceLocationName
 */
class DescribeSourceLocationRequest extends Request
{
    /**
     * @param array{SourceLocationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
