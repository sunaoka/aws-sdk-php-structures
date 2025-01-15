<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UDF'|'DEPENDENCY_JAR' $ArtifactType
 * @property S3ContentLocation|null $S3ContentLocation
 * @property MavenReference|null $MavenReference
 */
class CustomArtifactConfiguration extends Shape
{
    /**
     * @param array{
     *     ArtifactType: 'UDF'|'DEPENDENCY_JAR',
     *     S3ContentLocation?: S3ContentLocation|null,
     *     MavenReference?: MavenReference|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
