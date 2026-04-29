<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Title
 * @property string|null $EmailAddress
 * @property string|null $PhoneNumber
 * @property 'BILLING'|'OPERATIONS'|'SECURITY'|null $AlternateContactType
 */
class AlternateContact extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Title?: string|null,
     *     EmailAddress?: string|null,
     *     PhoneNumber?: string|null,
     *     AlternateContactType?: 'BILLING'|'OPERATIONS'|'SECURITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
