<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property JobData|null $data
 * @property string|null $nonce
 * @property string|null $accountId
 */
class Job extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     data?: JobData|null,
     *     nonce?: string|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
