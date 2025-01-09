<?php

namespace Sunaoka\Aws\Structures\LocationService\DeletePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 */
class DeletePlaceIndexRequest extends Request
{
    /**
     * @param array{IndexName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
