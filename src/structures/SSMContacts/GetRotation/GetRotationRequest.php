<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 */
class GetRotationRequest extends Request
{
    /**
     * @param array{RotationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
