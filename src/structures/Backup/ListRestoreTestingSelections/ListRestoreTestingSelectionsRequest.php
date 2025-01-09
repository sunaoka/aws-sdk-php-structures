<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingSelections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $RestoreTestingPlanName
 */
class ListRestoreTestingSelectionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     RestoreTestingPlanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
