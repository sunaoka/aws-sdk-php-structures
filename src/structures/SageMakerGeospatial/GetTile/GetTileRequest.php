<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetTile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ExecutionRoleArn
 * @property list<string> $ImageAssets
 * @property bool $ImageMask
 * @property 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16' $OutputDataType
 * @property string $OutputFormat
 * @property string $PropertyFilters
 * @property 'INPUT'|'OUTPUT' $Target
 * @property string $TimeRangeFilter
 * @property int $x
 * @property int $y
 * @property int $z
 */
class GetTileRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ExecutionRoleArn?: string,
     *     ImageAssets: list<string>,
     *     ImageMask?: bool,
     *     OutputDataType?: 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16',
     *     OutputFormat?: string,
     *     PropertyFilters?: string,
     *     Target: 'INPUT'|'OUTPUT',
     *     TimeRangeFilter?: string,
     *     x: int,
     *     y: int,
     *     z: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
