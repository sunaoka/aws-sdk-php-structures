<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Language
 * @property string|null $TimeOffset
 * @property string|null $Label
 * @property Encryption|null $Encryption
 */
class CaptionSource extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Language?: string|null,
     *     TimeOffset?: string|null,
     *     Label?: string|null,
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
