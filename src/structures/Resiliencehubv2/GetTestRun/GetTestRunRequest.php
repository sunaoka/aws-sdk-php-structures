<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $serviceArn
 */
class GetTestRunRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     serviceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
