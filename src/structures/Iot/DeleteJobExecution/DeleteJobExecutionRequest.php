<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property int $executionNumber
 * @property bool $force
 * @property string $namespaceId
 */
class DeleteJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     executionNumber: int,
     *     force?: bool,
     *     namespaceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
