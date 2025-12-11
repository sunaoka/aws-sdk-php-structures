<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Email
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $BusinessTitle
 * @property string|null $Phone
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     Email?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     BusinessTitle?: string|null,
     *     Phone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
