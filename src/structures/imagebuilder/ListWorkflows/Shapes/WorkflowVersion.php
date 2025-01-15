<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property string|null $description
 * @property 'BUILD'|'TEST'|'DISTRIBUTION'|null $type
 * @property string|null $owner
 * @property string|null $dateCreated
 */
class WorkflowVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION'|null,
     *     owner?: string|null,
     *     dateCreated?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
