<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeVodSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $SourceGroup
 * @property 'DASH'|'HLS' $Type
 */
class HttpPackageConfiguration extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     SourceGroup: string,
     *     Type: 'DASH'|'HLS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
