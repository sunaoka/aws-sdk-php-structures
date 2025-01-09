<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingSelections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $RestoreTestingPlanName
 */
class ListRestoreTestingSelectionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     RestoreTestingPlanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
