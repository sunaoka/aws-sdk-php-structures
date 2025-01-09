<?php

namespace Sunaoka\Aws\Structures\Connect\ListViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED' $Type
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property string $Description
 */
class ViewSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED',
     *     Status?: 'PUBLISHED'|'SAVED',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
