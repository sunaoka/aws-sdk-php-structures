<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardsControlAssociationUpdate $StandardsControlAssociationUpdate
 * @property 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'LIMIT_EXCEEDED' $ErrorCode
 * @property string|null $ErrorReason
 */
class UnprocessedStandardsControlAssociationUpdate extends Shape
{
    /**
     * @param array{
     *     StandardsControlAssociationUpdate: StandardsControlAssociationUpdate,
     *     ErrorCode: 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'LIMIT_EXCEEDED',
     *     ErrorReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
