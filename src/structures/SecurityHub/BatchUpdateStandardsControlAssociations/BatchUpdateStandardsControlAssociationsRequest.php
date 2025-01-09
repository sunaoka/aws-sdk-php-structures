<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateStandardsControlAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StandardsControlAssociationUpdate> $StandardsControlAssociationUpdates
 */
class BatchUpdateStandardsControlAssociationsRequest extends Request
{
    /**
     * @param array{StandardsControlAssociationUpdates: list<Shapes\StandardsControlAssociationUpdate>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
