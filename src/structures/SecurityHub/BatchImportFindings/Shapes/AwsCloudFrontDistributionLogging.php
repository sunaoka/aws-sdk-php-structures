<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property bool|null $Enabled
 * @property bool|null $IncludeCookies
 * @property string|null $Prefix
 */
class AwsCloudFrontDistributionLogging extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Enabled?: bool|null,
     *     IncludeCookies?: bool|null,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
