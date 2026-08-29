<?php

namespace Sunaoka\Aws\Structures\HealthLake\RestoreFHIRDatastore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatastoreId
 * @property string $DatastoreArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED' $DatastoreStatus
 * @property string $DatastoreEndpoint
 */
class RestoreFHIRDatastoreResponse extends Response
{
}
