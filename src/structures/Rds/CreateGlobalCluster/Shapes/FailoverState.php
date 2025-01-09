<?php

namespace Sunaoka\Aws\Structures\Rds\CreateGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'failing-over'|'cancelling' $Status
 * @property string $FromDbClusterArn
 * @property string $ToDbClusterArn
 * @property bool $IsDataLossAllowed
 */
class FailoverState extends Shape
{
    /**
     * @param array{
     *     Status?: 'pending'|'failing-over'|'cancelling',
     *     FromDbClusterArn?: string,
     *     ToDbClusterArn?: string,
     *     IsDataLossAllowed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
