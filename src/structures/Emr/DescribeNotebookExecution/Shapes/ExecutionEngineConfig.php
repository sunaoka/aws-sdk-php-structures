<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'EMR' $Type
 * @property string $MasterInstanceSecurityGroupId
 * @property string $ExecutionRoleArn
 */
class ExecutionEngineConfig extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type?: 'EMR',
     *     MasterInstanceSecurityGroupId?: string,
     *     ExecutionRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
