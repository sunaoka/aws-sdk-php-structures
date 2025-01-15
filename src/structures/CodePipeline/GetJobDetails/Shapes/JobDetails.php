<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property JobData|null $data
 * @property string|null $accountId
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     data?: JobData|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
