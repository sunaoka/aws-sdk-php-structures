<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateFHIRDatastore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatastoreId
 * @property string $DatastoreArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED' $DatastoreStatus
 * @property string $DatastoreEndpoint
 */
class CreateFHIRDatastoreResponse extends Response
{
}
