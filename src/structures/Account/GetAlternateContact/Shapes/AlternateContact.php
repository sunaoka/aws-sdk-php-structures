<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 * @property string $EmailAddress
 * @property string $Name
 * @property string $PhoneNumber
 * @property string $Title
 */
class AlternateContact extends Shape
{
    /**
     * @param array{
     *     AlternateContactType?: 'BILLING'|'OPERATIONS'|'SECURITY',
     *     EmailAddress?: string,
     *     Name?: string,
     *     PhoneNumber?: string,
     *     Title?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
