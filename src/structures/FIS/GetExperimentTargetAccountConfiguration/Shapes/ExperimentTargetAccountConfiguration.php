<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTargetAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleArn
 * @property string|null $accountId
 * @property string|null $description
 */
class ExperimentTargetAccountConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     accountId?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
