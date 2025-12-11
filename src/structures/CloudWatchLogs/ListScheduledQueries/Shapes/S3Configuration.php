<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationIdentifier
 * @property string $roleArn
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     destinationIdentifier: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
