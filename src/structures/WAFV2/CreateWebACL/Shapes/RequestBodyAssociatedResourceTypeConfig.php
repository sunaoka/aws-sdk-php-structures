<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KB_16'|'KB_32'|'KB_48'|'KB_64' $DefaultSizeInspectionLimit
 */
class RequestBodyAssociatedResourceTypeConfig extends Shape
{
    /**
     * @param array{DefaultSizeInspectionLimit: 'KB_16'|'KB_32'|'KB_48'|'KB_64'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
