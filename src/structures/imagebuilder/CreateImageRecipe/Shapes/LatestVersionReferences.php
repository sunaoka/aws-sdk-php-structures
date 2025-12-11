<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImageRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $latestVersionArn
 * @property string|null $latestMajorVersionArn
 * @property string|null $latestMinorVersionArn
 * @property string|null $latestPatchVersionArn
 */
class LatestVersionReferences extends Shape
{
    /**
     * @param array{
     *     latestVersionArn?: string|null,
     *     latestMajorVersionArn?: string|null,
     *     latestMinorVersionArn?: string|null,
     *     latestPatchVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
