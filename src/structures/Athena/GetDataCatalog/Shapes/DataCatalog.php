<?php

namespace Sunaoka\Aws\Structures\Athena\GetDataCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'LAMBDA'|'GLUE'|'HIVE' $Type
 * @property array<string, string>|null $Parameters
 */
class DataCatalog extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE',
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
