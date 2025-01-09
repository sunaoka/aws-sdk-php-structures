<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StandardsControlAssociationId> $StandardsControlAssociationIds
 */
class BatchGetStandardsControlAssociationsRequest extends Request
{
    /**
     * @param array{StandardsControlAssociationIds: list<Shapes\StandardsControlAssociationId>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
