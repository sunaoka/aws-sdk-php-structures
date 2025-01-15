<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigningProfileParameter|null $signingProfileParameter
 * @property string|null $signingProfileName
 * @property Destination|null $destination
 */
class StartSigningJobParameter extends Shape
{
    /**
     * @param array{
     *     signingProfileParameter?: SigningProfileParameter|null,
     *     signingProfileName?: string|null,
     *     destination?: Destination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
