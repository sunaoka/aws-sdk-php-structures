<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $Category
 * @property list<string>|null $Identifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\SolutionSort|null $Sort
 * @property list<'Active'|'Inactive'|'Draft'>|null $Status
 */
class ListSolutionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Category?: list<string>|null,
     *     Identifier?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\SolutionSort|null,
     *     Status?: list<'Active'|'Inactive'|'Draft'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
