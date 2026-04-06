<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property string $Category
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Id
 * @property string $Name
 * @property 'Active'|'Inactive'|'Draft' $Status
 */
class SolutionBase extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Catalog: string,
     *     Category: string,
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     Id: string,
     *     Name: string,
     *     Status: 'Active'|'Inactive'|'Draft'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
