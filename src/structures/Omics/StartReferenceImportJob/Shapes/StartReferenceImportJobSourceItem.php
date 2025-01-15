<?php

namespace Sunaoka\Aws\Structures\Omics\StartReferenceImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceFile
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class StartReferenceImportJobSourceItem extends Shape
{
    /**
     * @param array{
     *     sourceFile: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
