<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobBookmark\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property int $Version
 * @property int $Run
 * @property int $Attempt
 * @property string $PreviousRunId
 * @property string $RunId
 * @property string $JobBookmark
 */
class JobBookmarkEntry extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     Version?: int,
     *     Run?: int,
     *     Attempt?: int,
     *     PreviousRunId?: string,
     *     RunId?: string,
     *     JobBookmark?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
