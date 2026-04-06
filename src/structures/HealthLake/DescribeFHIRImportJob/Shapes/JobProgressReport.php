<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalNumberOfScannedFiles
 * @property double|null $TotalSizeOfScannedFilesInMB
 * @property int|null $TotalNumberOfImportedFiles
 * @property int|null $TotalNumberOfResourcesScanned
 * @property int|null $TotalNumberOfResourcesImported
 * @property int|null $TotalNumberOfResourcesWithCustomerError
 * @property int|null $TotalNumberOfFilesReadWithCustomerError
 * @property double|null $Throughput
 */
class JobProgressReport extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfScannedFiles?: int|null,
     *     TotalSizeOfScannedFilesInMB?: double|null,
     *     TotalNumberOfImportedFiles?: int|null,
     *     TotalNumberOfResourcesScanned?: int|null,
     *     TotalNumberOfResourcesImported?: int|null,
     *     TotalNumberOfResourcesWithCustomerError?: int|null,
     *     TotalNumberOfFilesReadWithCustomerError?: int|null,
     *     Throughput?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
