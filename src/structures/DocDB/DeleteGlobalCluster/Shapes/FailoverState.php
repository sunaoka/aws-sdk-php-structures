<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'failing-over'|'cancelling'|null $Status
 * @property string|null $FromDbClusterArn
 * @property string|null $ToDbClusterArn
 * @property bool|null $IsDataLossAllowed
 */
class FailoverState extends Shape
{
    /**
     * @param array{
     *     Status?: 'pending'|'failing-over'|'cancelling'|null,
     *     FromDbClusterArn?: string|null,
     *     ToDbClusterArn?: string|null,
     *     IsDataLossAllowed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
