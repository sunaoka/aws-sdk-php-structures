<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $lastDeployTime
 * @property string $status
 * @property string $thumbnailUrl
 * @property string $branchName
 */
class ProductionBranch extends Shape
{
    /**
     * @param array{
     *     lastDeployTime?: \Aws\Api\DateTimeResult,
     *     status?: string,
     *     thumbnailUrl?: string,
     *     branchName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
