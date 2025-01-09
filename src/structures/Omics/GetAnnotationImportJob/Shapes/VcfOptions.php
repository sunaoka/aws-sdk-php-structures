<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ignoreQualField
 * @property bool $ignoreFilterField
 */
class VcfOptions extends Shape
{
    /**
     * @param array{
     *     ignoreQualField?: bool,
     *     ignoreFilterField?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
