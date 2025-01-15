<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property int $executionNumber
 * @property bool|null $force
 * @property string|null $namespaceId
 */
class DeleteJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     executionNumber: int,
     *     force?: bool|null,
     *     namespaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
