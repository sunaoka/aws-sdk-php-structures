<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeLiveSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 */
class DescribeLiveSourceRequest extends Request
{
    /**
     * @param array{
     *     LiveSourceName: string,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
