<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\TargetGroupConfig $config
 * @property string $name
 * @property array<string, string> $tags
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 */
class CreateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     config?: Shapes\TargetGroupConfig,
     *     name: string,
     *     tags?: array<string, string>,
     *     type: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
