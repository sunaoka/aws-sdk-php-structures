<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressListImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $Name
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'STOPPED' $Status
 * @property string $PreSignedUrl
 * @property int|null $ImportedItemsCount
 * @property int|null $FailedItemsCount
 * @property Shapes\ImportDataFormat $ImportDataFormat
 * @property string $AddressListId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property string|null $Error
 */
class GetAddressListImportJobResponse extends Response
{
}
