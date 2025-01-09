<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property bool $Enabled
 * @property bool $IncludeCookies
 * @property string $Prefix
 */
class AwsCloudFrontDistributionLogging extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Enabled?: bool,
     *     IncludeCookies?: bool,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
