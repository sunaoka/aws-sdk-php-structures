<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateResourceToProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $ResourceArn
 * @property string $Name
 * @property string|null $ResourceProperties
 */
class AssociateResourceToProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ResourceArn: string,
     *     Name: string,
     *     ResourceProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
