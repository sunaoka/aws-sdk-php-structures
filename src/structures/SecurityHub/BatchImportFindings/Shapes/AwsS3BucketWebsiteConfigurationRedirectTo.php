<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property string $Protocol
 */
class AwsS3BucketWebsiteConfigurationRedirectTo extends Shape
{
    /**
     * @param array{
     *     Hostname?: string,
     *     Protocol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
