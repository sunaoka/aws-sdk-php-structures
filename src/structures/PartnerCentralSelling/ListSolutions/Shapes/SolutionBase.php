<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string|null $Arn
 * @property string $Name
 * @property 'Active'|'Inactive'|'Draft' $Status
 * @property string $Category
 * @property \Aws\Api\DateTimeResult $CreatedDate
 */
class SolutionBase extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Id: string,
     *     Arn?: string|null,
     *     Name: string,
     *     Status: 'Active'|'Inactive'|'Draft',
     *     Category: string,
     *     CreatedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
