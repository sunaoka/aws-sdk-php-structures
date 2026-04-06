<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingSelections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $RestoreTestingPlanName
 */
class ListRestoreTestingSelectionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     RestoreTestingPlanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
