<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Prefix'|'Suffix'|null $Name
 * @property string|null $Value
 */
class AwsS3BucketNotificationConfigurationS3KeyFilterRule extends Shape
{
    /**
     * @param array{
     *     Name?: 'Prefix'|'Suffix'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
