<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfScannedFiles
 * @property double $TotalSizeOfScannedFilesInMB
 * @property int $TotalNumberOfImportedFiles
 * @property int $TotalNumberOfResourcesScanned
 * @property int $TotalNumberOfResourcesImported
 * @property int $TotalNumberOfResourcesWithCustomerError
 * @property int $TotalNumberOfFilesReadWithCustomerError
 * @property double $Throughput
 */
class JobProgressReport extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfScannedFiles?: int,
     *     TotalSizeOfScannedFilesInMB?: double,
     *     TotalNumberOfImportedFiles?: int,
     *     TotalNumberOfResourcesScanned?: int,
     *     TotalNumberOfResourcesImported?: int,
     *     TotalNumberOfResourcesWithCustomerError?: int,
     *     TotalNumberOfFilesReadWithCustomerError?: int,
     *     Throughput?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
