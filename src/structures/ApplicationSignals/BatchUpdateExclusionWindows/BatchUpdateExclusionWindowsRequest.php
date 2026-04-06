<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchUpdateExclusionWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SloIds
 * @property list<Shapes\ExclusionWindow>|null $AddExclusionWindows
 * @property list<Shapes\ExclusionWindow>|null $RemoveExclusionWindows
 */
class BatchUpdateExclusionWindowsRequest extends Request
{
    /**
     * @param array{
     *     SloIds: list<string>,
     *     AddExclusionWindows?: list<Shapes\ExclusionWindow>|null,
     *     RemoveExclusionWindows?: list<Shapes\ExclusionWindow>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
