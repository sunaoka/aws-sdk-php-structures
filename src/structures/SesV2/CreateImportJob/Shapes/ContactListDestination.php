<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactListName
 * @property 'DELETE'|'PUT' $ContactListImportAction
 */
class ContactListDestination extends Shape
{
    /**
     * @param array{
     *     ContactListName: string,
     *     ContactListImportAction: 'DELETE'|'PUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
