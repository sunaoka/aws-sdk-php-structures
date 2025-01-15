<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BILLING'|'OPERATIONS'|'SECURITY'|null $AlternateContactType
 * @property string|null $EmailAddress
 * @property string|null $Name
 * @property string|null $PhoneNumber
 * @property string|null $Title
 */
class AlternateContact extends Shape
{
    /**
     * @param array{
     *     AlternateContactType?: 'BILLING'|'OPERATIONS'|'SECURITY'|null,
     *     EmailAddress?: string|null,
     *     Name?: string|null,
     *     PhoneNumber?: string|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
