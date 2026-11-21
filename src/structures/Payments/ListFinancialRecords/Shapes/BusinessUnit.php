<?php

namespace Sunaoka\Aws\Structures\Payments\ListFinancialRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $merchantOfRecord
 * @property 'AWS_CLOUD_SERVICES'|'PROSERVE_MARKETING_AND_TRAINING'|'AWS_MARKETPLACE'|null $lineOfBusiness
 */
class BusinessUnit extends Shape
{
    /**
     * @param array{
     *     merchantOfRecord: string,
     *     lineOfBusiness?: 'AWS_CLOUD_SERVICES'|'PROSERVE_MARKETING_AND_TRAINING'|'AWS_MARKETPLACE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
