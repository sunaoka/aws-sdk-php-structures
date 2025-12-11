<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AcceptConnectionInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 */
class SellerProfileSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
