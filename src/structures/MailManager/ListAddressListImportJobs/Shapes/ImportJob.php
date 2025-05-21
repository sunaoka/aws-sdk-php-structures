<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressListId
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string|null $Error
 * @property int|null $FailedItemsCount
 * @property ImportDataFormat $ImportDataFormat
 * @property int|null $ImportedItemsCount
 * @property string $JobId
 * @property string $Name
 * @property string $PreSignedUrl
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED' $Status
 */
class ImportJob extends Shape
{
    /**
     * @param array{
     *     AddressListId: string,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     Error?: string|null,
     *     FailedItemsCount?: int|null,
     *     ImportDataFormat: ImportDataFormat,
     *     ImportedItemsCount?: int|null,
     *     JobId: string,
     *     Name: string,
     *     PreSignedUrl: string,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
