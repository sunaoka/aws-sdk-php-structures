<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKeyRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int $RotationPeriodInDays
 */
class EnableKeyRotationRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     RotationPeriodInDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
