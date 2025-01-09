<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROCESS_OWNER'|'RESOURCE_OWNER' $roleType
 * @property string $roleArn
 */
class Role extends Shape
{
    /**
     * @param array{
     *     roleType: 'PROCESS_OWNER'|'RESOURCE_OWNER',
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
