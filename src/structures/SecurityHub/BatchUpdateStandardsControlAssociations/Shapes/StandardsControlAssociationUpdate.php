<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsArn
 * @property string $SecurityControlId
 * @property 'ENABLED'|'DISABLED' $AssociationStatus
 * @property string $UpdatedReason
 */
class StandardsControlAssociationUpdate extends Shape
{
    /**
     * @param array{
     *     StandardsArn: string,
     *     SecurityControlId: string,
     *     AssociationStatus: 'ENABLED'|'DISABLED',
     *     UpdatedReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
