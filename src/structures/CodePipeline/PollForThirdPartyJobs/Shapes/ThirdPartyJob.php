<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForThirdPartyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientId
 * @property string|null $jobId
 */
class ThirdPartyJob extends Shape
{
    /**
     * @param array{
     *     clientId?: string|null,
     *     jobId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
