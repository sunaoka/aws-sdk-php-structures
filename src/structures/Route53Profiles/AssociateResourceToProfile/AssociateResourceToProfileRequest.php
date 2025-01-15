<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateResourceToProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ProfileId
 * @property string $ResourceArn
 * @property string|null $ResourceProperties
 */
class AssociateResourceToProfileRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ProfileId: string,
     *     ResourceArn: string,
     *     ResourceProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
