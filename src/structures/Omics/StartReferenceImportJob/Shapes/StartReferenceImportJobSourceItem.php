<?php

namespace Sunaoka\Aws\Structures\Omics\StartReferenceImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceFile
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 */
class StartReferenceImportJobSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFile: string,
     *     name: string,
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
