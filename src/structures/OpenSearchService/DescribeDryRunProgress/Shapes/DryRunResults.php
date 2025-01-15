<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentType
 * @property string|null $Message
 */
class DryRunResults extends Shape
{
    /**
     * @param array{
     *     DeploymentType?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
