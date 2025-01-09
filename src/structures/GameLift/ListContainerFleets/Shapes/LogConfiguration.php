<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'CLOUDWATCH'|'S3' $LogDestination
 * @property string $S3BucketName
 * @property string $LogGroupArn
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     LogDestination?: 'NONE'|'CLOUDWATCH'|'S3',
     *     S3BucketName?: string,
     *     LogGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
