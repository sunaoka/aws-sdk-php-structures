<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 */
class DeleteMapRequest extends Request
{
    /**
     * @param array{MapName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
