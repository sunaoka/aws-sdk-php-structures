<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CreateDatastore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 */
class CreateDatastoreResponse extends Response
{
}
