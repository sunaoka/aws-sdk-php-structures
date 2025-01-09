<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 */
class DescribeFHIRDatastoreRequest extends Request
{
    /**
     * @param array{DatastoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
