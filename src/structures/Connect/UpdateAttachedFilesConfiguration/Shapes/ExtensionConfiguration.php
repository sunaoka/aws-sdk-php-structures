<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAttachedFilesConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AllowedExtension> $AllowedExtensions
 */
class ExtensionConfiguration extends Shape
{
    /**
     * @param array{AllowedExtensions: list<AllowedExtension>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
