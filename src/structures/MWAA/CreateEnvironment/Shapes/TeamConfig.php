<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceBucketArn
 * @property string $DagS3Path
 */
class TeamConfig extends Shape
{
    /**
     * @param array{
     *     SourceBucketArn: string,
     *     DagS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
