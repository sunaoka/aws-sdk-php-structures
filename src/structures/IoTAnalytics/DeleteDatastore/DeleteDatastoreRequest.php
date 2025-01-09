<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 */
class DeleteDatastoreRequest extends Request
{
    /**
     * @param array{datastoreName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
