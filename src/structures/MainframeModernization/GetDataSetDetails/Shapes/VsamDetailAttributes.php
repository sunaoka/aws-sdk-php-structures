<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateKey> $alternateKeys
 * @property bool $cacheAtStartup
 * @property bool $compressed
 * @property string $encoding
 * @property PrimaryKey $primaryKey
 * @property string $recordFormat
 */
class VsamDetailAttributes extends Shape
{
    /**
     * @param array{
     *     alternateKeys?: list<AlternateKey>,
     *     cacheAtStartup?: bool,
     *     compressed?: bool,
     *     encoding?: string,
     *     primaryKey?: PrimaryKey,
     *     recordFormat?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
