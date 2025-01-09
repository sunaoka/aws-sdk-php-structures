<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListTagsForResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class ListTagsForResourcesRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
