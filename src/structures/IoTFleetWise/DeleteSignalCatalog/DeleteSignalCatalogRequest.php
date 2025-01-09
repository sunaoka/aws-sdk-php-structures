<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteSignalCatalogRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
