<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ReportTaskProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property list<Shapes\Field> $fields
 */
class ReportTaskProgressRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     fields?: list<Shapes\Field>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
