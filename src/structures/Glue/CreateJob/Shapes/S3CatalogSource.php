<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property string $PartitionPredicate
 * @property S3SourceAdditionalOptions $AdditionalOptions
 */
class S3CatalogSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     PartitionPredicate?: string,
     *     AdditionalOptions?: S3SourceAdditionalOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
