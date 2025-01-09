<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigningProfileParameter $signingProfileParameter
 * @property string $signingProfileName
 * @property Destination $destination
 */
class StartSigningJobParameter extends Shape
{
    /**
     * @param array{
     *     signingProfileParameter?: SigningProfileParameter,
     *     signingProfileName?: string,
     *     destination?: Destination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
