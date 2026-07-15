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
 * @property int|null $TotalNumberOfScannedNonFhirFiles
 * @property double|null $TotalSizeOfScannedNonFhirFilesInMB
 * @property int|null $TotalNumberOfImportedNonFhirFiles
 * @property int|null $TotalNumberOfNonFhirResourcesScanned
 * @property int|null $TotalNumberOfNonFhirResourcesImported
 * @property int|null $TotalNumberOfNonFhirResourcesWithCustomerError
 * @property int|null $TotalNumberOfNonFhirFilesReadWithCustomerError
 * @property double|null $Throughput
 * @property int|null $TotalFilesConverted
 * @property int|null $TotalResourcesGenerated
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
     *     TotalNumberOfScannedNonFhirFiles?: int|null,
     *     TotalSizeOfScannedNonFhirFilesInMB?: double|null,
     *     TotalNumberOfImportedNonFhirFiles?: int|null,
     *     TotalNumberOfNonFhirResourcesScanned?: int|null,
     *     TotalNumberOfNonFhirResourcesImported?: int|null,
     *     TotalNumberOfNonFhirResourcesWithCustomerError?: int|null,
     *     TotalNumberOfNonFhirFilesReadWithCustomerError?: int|null,
     *     Throughput?: double|null,
     *     TotalFilesConverted?: int|null,
     *     TotalResourcesGenerated?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
