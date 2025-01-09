<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RegisterResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property bool $UseServiceLinkedRole
 * @property string $RoleArn
 * @property bool $WithFederation
 * @property bool $HybridAccessEnabled
 */
class RegisterResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     UseServiceLinkedRole?: bool,
     *     RoleArn?: string,
     *     WithFederation?: bool,
     *     HybridAccessEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
