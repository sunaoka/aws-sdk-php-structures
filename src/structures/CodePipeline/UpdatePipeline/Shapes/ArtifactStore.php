<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $type
 * @property string $location
 * @property EncryptionKey|null $encryptionKey
 */
class ArtifactStore extends Shape
{
    /**
     * @param array{
     *     type: 'S3',
     *     location: string,
     *     encryptionKey?: EncryptionKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
