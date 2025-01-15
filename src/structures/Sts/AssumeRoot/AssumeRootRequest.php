<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetPrincipal
 * @property Shapes\PolicyDescriptorType $TaskPolicyArn
 * @property int<0, 900>|null $DurationSeconds
 */
class AssumeRootRequest extends Request
{
    /**
     * @param array{
     *     TargetPrincipal: string,
     *     TaskPolicyArn: Shapes\PolicyDescriptorType,
     *     DurationSeconds?: int<0, 900>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
