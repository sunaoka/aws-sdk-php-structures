<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 */
class SigningMaterial extends Shape
{
    /**
     * @param array{certificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
