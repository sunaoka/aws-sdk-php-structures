<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $FindingIds
 * @property Shapes\SortCriteria $SortCriteria
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingIds: list<string>,
     *     SortCriteria?: Shapes\SortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
