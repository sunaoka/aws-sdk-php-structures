<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'INDEX'|'DATASOURCE'|null $type
 */
class DocumentAclGroup extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'INDEX'|'DATASOURCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
