<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property string $RotationOverrideId
 */
class GetRotationOverrideRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     RotationOverrideId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
