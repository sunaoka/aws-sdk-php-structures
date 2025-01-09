<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Language
 * @property string $TimeOffset
 * @property string $Label
 * @property Encryption $Encryption
 */
class CaptionSource extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Language?: string,
     *     TimeOffset?: string,
     *     Label?: string,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
