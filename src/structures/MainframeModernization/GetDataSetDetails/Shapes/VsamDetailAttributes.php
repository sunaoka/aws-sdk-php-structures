<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateKey>|null $alternateKeys
 * @property bool|null $cacheAtStartup
 * @property bool|null $compressed
 * @property string|null $encoding
 * @property PrimaryKey|null $primaryKey
 * @property string|null $recordFormat
 */
class VsamDetailAttributes extends Shape
{
    /**
     * @param array{
     *     alternateKeys?: list<AlternateKey>|null,
     *     cacheAtStartup?: bool|null,
     *     compressed?: bool|null,
     *     encoding?: string|null,
     *     primaryKey?: PrimaryKey|null,
     *     recordFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
