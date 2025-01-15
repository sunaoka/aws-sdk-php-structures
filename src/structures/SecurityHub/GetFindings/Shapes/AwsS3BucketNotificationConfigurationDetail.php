<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Events
 * @property AwsS3BucketNotificationConfigurationFilter|null $Filter
 * @property string|null $Destination
 * @property string|null $Type
 */
class AwsS3BucketNotificationConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     Events?: list<string>|null,
     *     Filter?: AwsS3BucketNotificationConfigurationFilter|null,
     *     Destination?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
