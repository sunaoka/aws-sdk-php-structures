<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $Category
 * @property list<string> $Identifier
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\SolutionSort $Sort
 * @property list<'Active'|'Inactive'|'Draft'> $Status
 */
class ListSolutionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Category?: list<string>,
     *     Identifier?: list<string>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Sort?: Shapes\SolutionSort,
     *     Status?: list<'Active'|'Inactive'|'Draft'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
