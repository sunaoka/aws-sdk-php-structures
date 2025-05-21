<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressListImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AddressListId
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string|null $Error
 * @property int|null $FailedItemsCount
 * @property Shapes\ImportDataFormat $ImportDataFormat
 * @property int|null $ImportedItemsCount
 * @property string $JobId
 * @property string $Name
 * @property string $PreSignedUrl
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED' $Status
 */
class GetAddressListImportJobResponse extends Response
{
}
