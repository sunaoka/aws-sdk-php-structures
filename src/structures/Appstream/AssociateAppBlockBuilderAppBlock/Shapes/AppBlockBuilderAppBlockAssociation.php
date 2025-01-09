<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateAppBlockBuilderAppBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppBlockArn
 * @property string $AppBlockBuilderName
 */
class AppBlockBuilderAppBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AppBlockArn: string,
     *     AppBlockBuilderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
