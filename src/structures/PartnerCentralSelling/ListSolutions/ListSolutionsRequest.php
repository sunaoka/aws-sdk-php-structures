<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\SolutionSort|null $Sort
 * @property list<'Active'|'Inactive'|'Draft'>|null $Status
 * @property list<string>|null $Identifier
 * @property list<string>|null $Category
 */
class ListSolutionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\SolutionSort|null,
     *     Status?: list<'Active'|'Inactive'|'Draft'>|null,
     *     Identifier?: list<string>|null,
     *     Category?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
