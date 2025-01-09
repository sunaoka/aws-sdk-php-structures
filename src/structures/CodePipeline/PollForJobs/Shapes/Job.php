<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property JobData $data
 * @property string $nonce
 * @property string $accountId
 */
class Job extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     data?: JobData,
     *     nonce?: string,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
