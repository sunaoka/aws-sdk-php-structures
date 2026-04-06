<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessTitle
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 * @property string|null $Phone
 */
class LeadContact extends Shape
{
    /**
     * @param array{
     *     BusinessTitle: string,
     *     Email: string,
     *     FirstName: string,
     *     LastName: string,
     *     Phone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
