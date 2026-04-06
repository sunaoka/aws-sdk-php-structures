<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $IncludeCookies
 * @property string|null $Bucket
 * @property string|null $Prefix
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     IncludeCookies?: bool|null,
     *     Bucket?: string|null,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
