<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobBookmark\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property int|null $Version
 * @property int|null $Run
 * @property int|null $Attempt
 * @property string|null $PreviousRunId
 * @property string|null $RunId
 * @property string|null $JobBookmark
 */
class JobBookmarkEntry extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     Version?: int|null,
     *     Run?: int|null,
     *     Attempt?: int|null,
     *     PreviousRunId?: string|null,
     *     RunId?: string|null,
     *     JobBookmark?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
