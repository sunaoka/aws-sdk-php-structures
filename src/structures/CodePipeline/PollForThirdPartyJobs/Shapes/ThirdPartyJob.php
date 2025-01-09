<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForThirdPartyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $jobId
 */
class ThirdPartyJob extends Shape
{
    /**
     * @param array{
     *     clientId?: string,
     *     jobId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
