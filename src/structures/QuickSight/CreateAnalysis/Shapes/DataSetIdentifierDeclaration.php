<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $DataSetArn
 */
class DataSetIdentifierDeclaration extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     DataSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
