<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectId
 * @property string|null $ProjectDisplayName
 */
class GcpProject extends Shape
{
    /**
     * @param array{
     *     ProjectId: string,
     *     ProjectDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
