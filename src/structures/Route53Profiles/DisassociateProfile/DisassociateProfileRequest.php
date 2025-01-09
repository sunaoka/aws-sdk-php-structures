<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DisassociateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $ResourceId
 */
class DisassociateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
