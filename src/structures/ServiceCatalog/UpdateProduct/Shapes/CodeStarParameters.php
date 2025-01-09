<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionArn
 * @property string $Repository
 * @property string $Branch
 * @property string $ArtifactPath
 */
class CodeStarParameters extends Shape
{
    /**
     * @param array{
     *     ConnectionArn: string,
     *     Repository: string,
     *     Branch: string,
     *     ArtifactPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
