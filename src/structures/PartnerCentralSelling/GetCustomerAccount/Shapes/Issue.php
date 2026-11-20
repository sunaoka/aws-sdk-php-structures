<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Severity
 * @property string|null $Code
 * @property string|null $Message
 */
class Issue extends Shape
{
    /**
     * @param array{
     *     Severity?: string|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
