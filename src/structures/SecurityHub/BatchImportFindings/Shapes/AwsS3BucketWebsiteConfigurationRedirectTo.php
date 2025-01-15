<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Hostname
 * @property string|null $Protocol
 */
class AwsS3BucketWebsiteConfigurationRedirectTo extends Shape
{
    /**
     * @param array{
     *     Hostname?: string|null,
     *     Protocol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
