<?php

namespace Sunaoka\Aws\Structures\HealthLake\DeleteFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 */
class DeleteFHIRDatastoreRequest extends Request
{
    /**
     * @param array{DatastoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
