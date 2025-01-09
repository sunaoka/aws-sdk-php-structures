<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $IncludeCookies
 * @property string $Bucket
 * @property string $Prefix
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     IncludeCookies?: bool,
     *     Bucket?: string,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
