<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC' $Format
 * @property Shapes\FormatOptions $FormatOptions
 * @property Shapes\Input $Input
 * @property Shapes\PathOptions $PathOptions
 * @property array<string, string> $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC',
     *     FormatOptions?: Shapes\FormatOptions,
     *     Input: Shapes\Input,
     *     PathOptions?: Shapes\PathOptions,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
