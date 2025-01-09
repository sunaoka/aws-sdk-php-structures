<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Authorization
 */
class LakeFormationQuery extends Shape
{
    /**
     * @param array{Authorization: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
