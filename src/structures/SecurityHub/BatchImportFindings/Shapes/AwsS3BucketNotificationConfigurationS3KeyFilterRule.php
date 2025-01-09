<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Prefix'|'Suffix' $Name
 * @property string $Value
 */
class AwsS3BucketNotificationConfigurationS3KeyFilterRule extends Shape
{
    /**
     * @param array{
     *     Name?: 'Prefix'|'Suffix',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
