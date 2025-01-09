<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateAssociationBatchRequestEntry $Entry
 * @property string $Message
 * @property 'Client'|'Server'|'Unknown' $Fault
 */
class FailedCreateAssociation extends Shape
{
    /**
     * @param array{
     *     Entry?: CreateAssociationBatchRequestEntry,
     *     Message?: string,
     *     Fault?: 'Client'|'Server'|'Unknown'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
