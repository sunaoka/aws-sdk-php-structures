<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property string $Name
 * @property IcebergDocument $Type
 * @property bool $Required
 * @property string|null $Doc
 */
class IcebergStructField extends Shape
{
    /**
     * @param array{
     *     Id: int,
     *     Name: string,
     *     Type: IcebergDocument,
     *     Required: bool,
     *     Doc?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
