<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AssociationDescription> $Successful
 * @property list<Shapes\FailedCreateAssociation> $Failed
 */
class CreateAssociationBatchResponse extends Response
{
}
