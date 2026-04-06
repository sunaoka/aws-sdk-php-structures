<?php

namespace Sunaoka\Aws\Structures\Invoicing\PutProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Email
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Email?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
