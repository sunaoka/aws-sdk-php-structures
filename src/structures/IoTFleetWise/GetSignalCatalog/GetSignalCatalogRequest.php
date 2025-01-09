<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetSignalCatalogRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
