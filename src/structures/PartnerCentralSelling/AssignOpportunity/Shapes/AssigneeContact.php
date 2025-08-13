<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssignOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 * @property string $BusinessTitle
 */
class AssigneeContact extends Shape
{
    /**
     * @param array{
     *     Email: string,
     *     FirstName: string,
     *     LastName: string,
     *     BusinessTitle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
