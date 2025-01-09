<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property JobData $data
 * @property string $accountId
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     data?: JobData,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
