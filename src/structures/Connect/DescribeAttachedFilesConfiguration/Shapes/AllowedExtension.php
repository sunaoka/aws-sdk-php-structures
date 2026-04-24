<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAttachedFilesConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Extension
 */
class AllowedExtension extends Shape
{
    /**
     * @param array{Extension: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
