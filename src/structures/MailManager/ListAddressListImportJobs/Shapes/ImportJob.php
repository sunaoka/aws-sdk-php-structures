<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $Name
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED' $Status
 * @property string $PreSignedUrl
 * @property int|null $ImportedItemsCount
 * @property int|null $FailedItemsCount
 * @property ImportDataFormat $ImportDataFormat
 * @property string $AddressListId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property string|null $Error
 */
class ImportJob extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     Name: string,
     *     Status: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED',
     *     PreSignedUrl: string,
     *     ImportedItemsCount?: int|null,
     *     FailedItemsCount?: int|null,
     *     ImportDataFormat: ImportDataFormat,
     *     AddressListId: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
