<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateEmergencyContactSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property string|null $PhoneNumber
 * @property string|null $ContactNotes
 */
class EmergencyContact extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     PhoneNumber?: string|null,
     *     ContactNotes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
