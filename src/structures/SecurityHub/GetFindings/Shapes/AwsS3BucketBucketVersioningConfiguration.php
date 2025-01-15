<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsMfaDeleteEnabled
 * @property string|null $Status
 */
class AwsS3BucketBucketVersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     IsMfaDeleteEnabled?: bool|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
