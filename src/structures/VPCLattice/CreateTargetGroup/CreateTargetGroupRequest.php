<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 * @property Shapes\TargetGroupConfig|null $config
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'IP'|'LAMBDA'|'INSTANCE'|'ALB',
     *     config?: Shapes\TargetGroupConfig|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
