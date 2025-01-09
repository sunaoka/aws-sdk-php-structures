<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Name'|'Owner'|'PlatformTypes'|'DocumentType' $key
 * @property string $value
 */
class DocumentFilter extends Shape
{
    /**
     * @param array{
     *     key: 'Name'|'Owner'|'PlatformTypes'|'DocumentType',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
