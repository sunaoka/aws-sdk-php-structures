<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 */
class DescribePlaceIndexRequest extends Request
{
    /**
     * @param array{IndexName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
