<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Days
 * @property string $Mode
 * @property int $Years
 */
class AwsS3BucketObjectLockConfigurationRuleDefaultRetentionDetails extends Shape
{
    /**
     * @param array{
     *     Days?: int,
     *     Mode?: string,
     *     Years?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
