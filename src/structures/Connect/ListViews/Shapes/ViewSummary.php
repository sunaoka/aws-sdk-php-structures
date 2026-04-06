<?php

namespace Sunaoka\Aws\Structures\Connect\ListViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $Type
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property string|null $Description
 */
class ViewSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
