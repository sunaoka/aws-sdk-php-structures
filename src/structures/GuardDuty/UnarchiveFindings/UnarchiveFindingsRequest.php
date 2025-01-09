<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UnarchiveFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $FindingIds
 */
class UnarchiveFindingsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
