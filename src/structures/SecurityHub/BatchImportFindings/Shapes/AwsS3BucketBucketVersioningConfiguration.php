<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsMfaDeleteEnabled
 * @property string $Status
 */
class AwsS3BucketBucketVersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     IsMfaDeleteEnabled?: bool,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
