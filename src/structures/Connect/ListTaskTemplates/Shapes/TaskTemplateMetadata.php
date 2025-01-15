<?php

namespace Sunaoka\Aws\Structures\Connect\ListTaskTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class TaskTemplateMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
