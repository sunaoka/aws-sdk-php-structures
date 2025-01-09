<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeVodSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class DescribeVodSourceRequest extends Request
{
    /**
     * @param array{
     *     SourceLocationName: string,
     *     VodSourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
