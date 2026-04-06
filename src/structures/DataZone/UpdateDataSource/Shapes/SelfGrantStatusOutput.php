<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueSelfGrantStatusOutput|null $glueSelfGrantStatus
 * @property RedshiftSelfGrantStatusOutput|null $redshiftSelfGrantStatus
 */
class SelfGrantStatusOutput extends Shape
{
    /**
     * @param array{
     *     glueSelfGrantStatus?: GlueSelfGrantStatusOutput|null,
     *     redshiftSelfGrantStatus?: RedshiftSelfGrantStatusOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
