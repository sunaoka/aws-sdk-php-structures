<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteDatastore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 */
class DeleteDatastoreResponse extends Response
{
}
