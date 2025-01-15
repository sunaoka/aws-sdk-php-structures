<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Days
 * @property string|null $Mode
 * @property int|null $Years
 */
class AwsS3BucketObjectLockConfigurationRuleDefaultRetentionDetails extends Shape
{
    /**
     * @param array{
     *     Days?: int|null,
     *     Mode?: string|null,
     *     Years?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
