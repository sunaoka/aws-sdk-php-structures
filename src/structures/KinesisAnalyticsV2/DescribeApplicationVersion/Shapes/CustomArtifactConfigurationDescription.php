<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UDF'|'DEPENDENCY_JAR'|null $ArtifactType
 * @property S3ContentLocation|null $S3ContentLocationDescription
 * @property MavenReference|null $MavenReferenceDescription
 */
class CustomArtifactConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ArtifactType?: 'UDF'|'DEPENDENCY_JAR'|null,
     *     S3ContentLocationDescription?: S3ContentLocation|null,
     *     MavenReferenceDescription?: MavenReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
