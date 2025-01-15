<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AssociationDescription>|null $Successful
 * @property list<Shapes\FailedCreateAssociation>|null $Failed
 */
class CreateAssociationBatchResponse extends Response
{
}
