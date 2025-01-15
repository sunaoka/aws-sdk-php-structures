<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Date
 * @property 'Pending'|'Success'|'Failed' $Name
 * @property string $Message
 * @property string|null $AdditionalInfo
 */
class AssociationStatus extends Shape
{
    /**
     * @param array{
     *     Date: \Aws\Api\DateTimeResult,
     *     Name: 'Pending'|'Success'|'Failed',
     *     Message: string,
     *     AdditionalInfo?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
