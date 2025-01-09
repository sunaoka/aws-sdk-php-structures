<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 * @property string $JobId
 */
class DescribeFHIRExportJobRequest extends Request
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
