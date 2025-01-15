<?php

namespace Sunaoka\Aws\Structures\Emr\StartNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'EMR'|null $Type
 * @property string|null $MasterInstanceSecurityGroupId
 * @property string|null $ExecutionRoleArn
 */
class ExecutionEngineConfig extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type?: 'EMR'|null,
     *     MasterInstanceSecurityGroupId?: string|null,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
