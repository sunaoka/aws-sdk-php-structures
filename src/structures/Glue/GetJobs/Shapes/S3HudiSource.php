<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property array<string, string>|null $AdditionalHudiOptions
 * @property S3DirectSourceAdditionalOptions|null $AdditionalOptions
 * @property list<GlueSchema>|null $OutputSchemas
 */
class S3HudiSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Paths: list<string>,
     *     AdditionalHudiOptions?: array<string, string>|null,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
