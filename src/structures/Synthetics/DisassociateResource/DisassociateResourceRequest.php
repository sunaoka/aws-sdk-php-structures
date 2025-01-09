<?php

namespace Sunaoka\Aws\Structures\Synthetics\DisassociateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 * @property string $ResourceArn
 */
class DisassociateResourceRequest extends Request
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
