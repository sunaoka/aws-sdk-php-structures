<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'failing-over'|'cancelling'|null $Status
 * @property string|null $FromDbClusterArn
 * @property string|null $ToDbClusterArn
 */
class FailoverState extends Shape
{
    /**
     * @param array{
     *     Status?: 'pending'|'failing-over'|'cancelling'|null,
     *     FromDbClusterArn?: string|null,
     *     ToDbClusterArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
