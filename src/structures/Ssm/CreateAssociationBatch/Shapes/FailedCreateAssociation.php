<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateAssociationBatchRequestEntry|null $Entry
 * @property string|null $Message
 * @property 'Client'|'Server'|'Unknown'|null $Fault
 */
class FailedCreateAssociation extends Shape
{
    /**
     * @param array{
     *     Entry?: CreateAssociationBatchRequestEntry|null,
     *     Message?: string|null,
     *     Fault?: 'Client'|'Server'|'Unknown'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
