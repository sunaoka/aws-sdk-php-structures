<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property float|null $Confidence
 * @property list<Instance>|null $Instances
 * @property list<ParentShape>|null $Parents
 * @property list<LabelAlias>|null $Aliases
 * @property list<LabelCategory>|null $Categories
 */
class Label extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Confidence?: float|null,
     *     Instances?: list<Instance>|null,
     *     Parents?: list<ParentShape>|null,
     *     Aliases?: list<LabelAlias>|null,
     *     Categories?: list<LabelCategory>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
