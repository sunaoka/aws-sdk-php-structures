<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AssociationId
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED' $Lifecycle
 * @property bool $DeleteDataInFileSystem
 */
class DeleteDataRepositoryAssociationResponse extends Response
{
}
