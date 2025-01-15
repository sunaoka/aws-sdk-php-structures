<?php

namespace Sunaoka\Aws\Structures\Amplify\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $lastDeployTime
 * @property string|null $status
 * @property string|null $thumbnailUrl
 * @property string|null $branchName
 */
class ProductionBranch extends Shape
{
    /**
     * @param array{
     *     lastDeployTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null,
     *     thumbnailUrl?: string|null,
     *     branchName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
