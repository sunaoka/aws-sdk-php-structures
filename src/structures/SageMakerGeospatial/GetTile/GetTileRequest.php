<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetTile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $ExecutionRoleArn
 * @property list<string> $ImageAssets
 * @property bool|null $ImageMask
 * @property 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16'|null $OutputDataType
 * @property string|null $OutputFormat
 * @property string|null $PropertyFilters
 * @property 'INPUT'|'OUTPUT' $Target
 * @property string|null $TimeRangeFilter
 * @property int $x
 * @property int $y
 * @property int $z
 */
class GetTileRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ExecutionRoleArn?: string|null,
     *     ImageAssets: list<string>,
     *     ImageMask?: bool|null,
     *     OutputDataType?: 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16'|null,
     *     OutputFormat?: string|null,
     *     PropertyFilters?: string|null,
     *     Target: 'INPUT'|'OUTPUT',
     *     TimeRangeFilter?: string|null,
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
