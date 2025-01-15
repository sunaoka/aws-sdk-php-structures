<?php

namespace Sunaoka\Aws\Structures\Iot\CancelJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property bool|null $force
 * @property int|null $expectedVersion
 * @property array<string, string>|null $statusDetails
 */
class CancelJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     force?: bool|null,
     *     expectedVersion?: int|null,
     *     statusDetails?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
