<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteRotationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property string $RotationOverrideId
 */
class DeleteRotationOverrideRequest extends Request
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
