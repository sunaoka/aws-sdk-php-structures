<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property string|null $PartitionPredicate
 * @property S3SourceAdditionalOptions|null $AdditionalOptions
 */
class S3CatalogSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     PartitionPredicate?: string|null,
     *     AdditionalOptions?: S3SourceAdditionalOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
