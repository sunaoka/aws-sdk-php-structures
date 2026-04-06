<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'INDEX'|'DATASOURCE'|null $type
 */
class DocumentAclUser extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: 'INDEX'|'DATASOURCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
