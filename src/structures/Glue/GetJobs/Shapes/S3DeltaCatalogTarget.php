<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Table
 * @property string $Database
 * @property array<string, string>|null $AdditionalOptions
 * @property CatalogSchemaChangePolicy|null $SchemaChangePolicy
 * @property AutoDataQuality|null $AutoDataQuality
 * @property list<GlueSchema>|null $OutputSchemas
 */
class S3DeltaCatalogTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Table: string,
     *     Database: string,
     *     AdditionalOptions?: array<string, string>|null,
     *     SchemaChangePolicy?: CatalogSchemaChangePolicy|null,
     *     AutoDataQuality?: AutoDataQuality|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
