<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeregisterResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeregisterResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
