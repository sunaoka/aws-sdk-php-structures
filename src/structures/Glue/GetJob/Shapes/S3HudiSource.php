<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property array<string, string> $AdditionalHudiOptions
 * @property S3DirectSourceAdditionalOptions $AdditionalOptions
 * @property list<GlueSchema> $OutputSchemas
 */
class S3HudiSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Paths: list<string>,
     *     AdditionalHudiOptions?: array<string, string>,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
