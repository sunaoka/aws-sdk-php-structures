<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssociationId
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED'|null $Lifecycle
 * @property bool|null $DeleteDataInFileSystem
 */
class DeleteDataRepositoryAssociationResponse extends Response
{
}
