<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressListImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON' $ImportDataType
 */
class ImportDataFormat extends Shape
{
    /**
     * @param array{ImportDataType: 'CSV'|'JSON'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
