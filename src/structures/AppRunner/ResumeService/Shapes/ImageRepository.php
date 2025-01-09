<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageIdentifier
 * @property ImageConfiguration $ImageConfiguration
 * @property 'ECR'|'ECR_PUBLIC' $ImageRepositoryType
 */
class ImageRepository extends Shape
{
    /**
     * @param array{
     *     ImageIdentifier: string,
     *     ImageConfiguration?: ImageConfiguration,
     *     ImageRepositoryType: 'ECR'|'ECR_PUBLIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
