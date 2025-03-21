<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingIds
 * @property Shapes\SortCriteria|null $sortCriteria
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingIds: list<string>,
     *     sortCriteria?: Shapes\SortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
