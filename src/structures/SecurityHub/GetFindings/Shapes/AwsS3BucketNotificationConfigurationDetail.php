<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Events
 * @property AwsS3BucketNotificationConfigurationFilter $Filter
 * @property string $Destination
 * @property string $Type
 */
class AwsS3BucketNotificationConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     Events?: list<string>,
     *     Filter?: AwsS3BucketNotificationConfigurationFilter,
     *     Destination?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
