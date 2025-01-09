<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputSerialization $InputSerialization
 * @property 'SQL' $ExpressionType
 * @property string $Expression
 * @property OutputSerialization $OutputSerialization
 */
class SelectParameters extends Shape
{
    /**
     * @param array{
     *     InputSerialization: InputSerialization,
     *     ExpressionType: 'SQL',
     *     Expression: string,
     *     OutputSerialization: OutputSerialization
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
