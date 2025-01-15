<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $ResourceArn
 * @property bool|null $WithFederation
 * @property bool|null $HybridAccessEnabled
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     ResourceArn: string,
     *     WithFederation?: bool|null,
     *     HybridAccessEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
