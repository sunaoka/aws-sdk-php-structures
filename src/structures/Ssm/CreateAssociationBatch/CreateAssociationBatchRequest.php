<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CreateAssociationBatchRequestEntry> $Entries
 * @property string|null $AssociationDispatchAssumeRole
 */
class CreateAssociationBatchRequest extends Request
{
    /**
     * @param array{
     *     Entries: list<Shapes\CreateAssociationBatchRequestEntry>,
     *     AssociationDispatchAssumeRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
