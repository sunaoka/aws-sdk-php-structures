<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC' $Format
 * @property Shapes\FormatOptions $FormatOptions
 * @property Shapes\Input $Input
 * @property Shapes\PathOptions $PathOptions
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC',
     *     FormatOptions?: Shapes\FormatOptions,
     *     Input: Shapes\Input,
     *     PathOptions?: Shapes\PathOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
