<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DisassociateResourceFromProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $ResourceArn
 */
class DisassociateResourceFromProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
