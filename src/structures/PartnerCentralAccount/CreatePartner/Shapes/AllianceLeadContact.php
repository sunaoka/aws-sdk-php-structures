<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreatePartner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $BusinessTitle
 */
class AllianceLeadContact extends Shape
{
    /**
     * @param array{
     *     FirstName: string,
     *     LastName: string,
     *     Email: string,
     *     BusinessTitle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
