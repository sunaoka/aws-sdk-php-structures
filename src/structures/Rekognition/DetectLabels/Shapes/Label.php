<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property float $Confidence
 * @property list<Instance> $Instances
 * @property list<ParentShape> $Parents
 * @property list<LabelAlias> $Aliases
 * @property list<LabelCategory> $Categories
 */
class Label extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Confidence?: float,
     *     Instances?: list<Instance>,
     *     Parents?: list<ParentShape>,
     *     Aliases?: list<LabelAlias>,
     *     Categories?: list<LabelCategory>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
