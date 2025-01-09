<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessTitle
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 * @property string $Phone
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     BusinessTitle?: string,
     *     Email?: string,
     *     FirstName?: string,
     *     LastName?: string,
     *     Phone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
