<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateKey>|null $alternateKeys
 * @property bool|null $compressed
 * @property string|null $encoding
 * @property string $format
 * @property PrimaryKey|null $primaryKey
 */
class VsamAttributes extends Shape
{
    /**
     * @param array{
     *     alternateKeys?: list<AlternateKey>|null,
     *     compressed?: bool|null,
     *     encoding?: string|null,
     *     format: string,
     *     primaryKey?: PrimaryKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
