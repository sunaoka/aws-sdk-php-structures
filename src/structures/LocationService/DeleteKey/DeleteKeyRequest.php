<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{KeyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
