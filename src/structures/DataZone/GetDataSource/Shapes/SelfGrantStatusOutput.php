<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueSelfGrantStatusOutput $glueSelfGrantStatus
 * @property RedshiftSelfGrantStatusOutput $redshiftSelfGrantStatus
 */
class SelfGrantStatusOutput extends Shape
{
    /**
     * @param array{
     *     glueSelfGrantStatus?: GlueSelfGrantStatusOutput,
     *     redshiftSelfGrantStatus?: RedshiftSelfGrantStatusOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
