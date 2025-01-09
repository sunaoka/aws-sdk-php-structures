<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardsControlAssociationId $StandardsControlAssociationId
 * @property 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'LIMIT_EXCEEDED' $ErrorCode
 * @property string $ErrorReason
 */
class UnprocessedStandardsControlAssociation extends Shape
{
    /**
     * @param array{
     *     StandardsControlAssociationId: StandardsControlAssociationId,
     *     ErrorCode: 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'LIMIT_EXCEEDED',
     *     ErrorReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
