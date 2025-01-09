<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateKey> $alternateKeys
 * @property bool $compressed
 * @property string $encoding
 * @property string $format
 * @property PrimaryKey $primaryKey
 */
class VsamAttributes extends Shape
{
    /**
     * @param array{
     *     alternateKeys?: list<AlternateKey>,
     *     compressed?: bool,
     *     encoding?: string,
     *     format: string,
     *     primaryKey?: PrimaryKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
