<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UDF'|'DEPENDENCY_JAR' $ArtifactType
 * @property S3ContentLocation $S3ContentLocationDescription
 * @property MavenReference $MavenReferenceDescription
 */
class CustomArtifactConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ArtifactType?: 'UDF'|'DEPENDENCY_JAR',
     *     S3ContentLocationDescription?: S3ContentLocation,
     *     MavenReferenceDescription?: MavenReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
