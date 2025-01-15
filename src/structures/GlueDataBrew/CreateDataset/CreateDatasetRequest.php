<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC'|null $Format
 * @property Shapes\FormatOptions|null $FormatOptions
 * @property Shapes\Input $Input
 * @property Shapes\PathOptions|null $PathOptions
 * @property array<string, string>|null $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC'|null,
     *     FormatOptions?: Shapes\FormatOptions|null,
     *     Input: Shapes\Input,
     *     PathOptions?: Shapes\PathOptions|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
