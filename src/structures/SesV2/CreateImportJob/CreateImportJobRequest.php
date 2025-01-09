<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportDestination $ImportDestination
 * @property Shapes\ImportDataSource $ImportDataSource
 */
class CreateImportJobRequest extends Request
{
    /**
     * @param array{
     *     ImportDestination: Shapes\ImportDestination,
     *     ImportDataSource: Shapes\ImportDataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
