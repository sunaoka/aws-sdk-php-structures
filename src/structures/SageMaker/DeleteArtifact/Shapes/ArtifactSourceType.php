<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MD5Hash'|'S3ETag'|'S3Version'|'Custom' $SourceIdType
 * @property string $Value
 */
class ArtifactSourceType extends Shape
{
    /**
     * @param array{
     *     SourceIdType: 'MD5Hash'|'S3ETag'|'S3Version'|'Custom',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
