<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateProactiveEngagementDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property string $PhoneNumber
 * @property string $ContactNotes
 */
class EmergencyContact extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     PhoneNumber?: string,
     *     ContactNotes?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
