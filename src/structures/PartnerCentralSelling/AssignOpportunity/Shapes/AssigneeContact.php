<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssignOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessTitle
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 */
class AssigneeContact extends Shape
{
    /**
     * @param array{
     *     BusinessTitle: string,
     *     Email: string,
     *     FirstName: string,
     *     LastName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
