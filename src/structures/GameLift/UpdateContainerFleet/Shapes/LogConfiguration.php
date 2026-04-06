<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'CLOUDWATCH'|'S3'|null $LogDestination
 * @property string|null $S3BucketName
 * @property string|null $LogGroupArn
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     LogDestination?: 'NONE'|'CLOUDWATCH'|'S3'|null,
     *     S3BucketName?: string|null,
     *     LogGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
