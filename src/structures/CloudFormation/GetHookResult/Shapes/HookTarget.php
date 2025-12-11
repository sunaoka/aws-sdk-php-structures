<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetHookResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE' $TargetType
 * @property string $TargetTypeName
 * @property string $TargetId
 * @property 'CREATE'|'UPDATE'|'DELETE'|'IMPORT' $Action
 */
class HookTarget extends Shape
{
    /**
     * @param array{
     *     TargetType: 'RESOURCE',
     *     TargetTypeName: string,
     *     TargetId: string,
     *     Action: 'CREATE'|'UPDATE'|'DELETE'|'IMPORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
