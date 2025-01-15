<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ignoreQualField
 * @property bool|null $ignoreFilterField
 */
class VcfOptions extends Shape
{
    /**
     * @param array{
     *     ignoreQualField?: bool|null,
     *     ignoreFilterField?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
