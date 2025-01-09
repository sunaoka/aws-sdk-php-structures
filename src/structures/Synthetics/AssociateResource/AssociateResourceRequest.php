<?php

namespace Sunaoka\Aws\Structures\Synthetics\AssociateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 * @property string $ResourceArn
 */
class AssociateResourceRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
