<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchExportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property LinkedIssue $linkedIssue
 */
class BatchExportFindingResult extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     linkedIssue: LinkedIssue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
