<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Catalog
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $Programs
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 */
class BenefitSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Catalog?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Programs?: list<string>|null,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
