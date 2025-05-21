<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSdiSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SdiSourceId
 */
class DescribeSdiSourceRequest extends Request
{
    /**
     * @param array{SdiSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
