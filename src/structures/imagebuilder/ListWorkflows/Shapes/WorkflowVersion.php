<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $description
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 * @property string $owner
 * @property string $dateCreated
 */
class WorkflowVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     description?: string,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION',
     *     owner?: string,
     *     dateCreated?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
