<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKeyRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int<90, 2560>|null $RotationPeriodInDays
 */
class EnableKeyRotationRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     RotationPeriodInDays?: int<90, 2560>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
