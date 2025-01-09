<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property bool $ForceDelete
 */
class DeleteKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     ForceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
