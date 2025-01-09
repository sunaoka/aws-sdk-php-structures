<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $ArtifactId
 * @property string $Version
 */
class MavenReference extends Shape
{
    /**
     * @param array{
     *     GroupId: string,
     *     ArtifactId: string,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
