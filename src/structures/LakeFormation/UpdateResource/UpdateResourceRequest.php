<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $ResourceArn
 * @property bool $WithFederation
 * @property bool $HybridAccessEnabled
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     ResourceArn: string,
     *     WithFederation?: bool,
     *     HybridAccessEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
