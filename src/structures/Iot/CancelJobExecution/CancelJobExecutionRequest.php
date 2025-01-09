<?php

namespace Sunaoka\Aws\Structures\Iot\CancelJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property bool $force
 * @property int $expectedVersion
 * @property array<string, string> $statusDetails
 */
class CancelJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     force?: bool,
     *     expectedVersion?: int,
     *     statusDetails?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
