<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\TargetGroupConfig|null $config
 * @property string $name
 * @property array<string, string>|null $tags
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 */
class CreateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     config?: Shapes\TargetGroupConfig|null,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     type: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
