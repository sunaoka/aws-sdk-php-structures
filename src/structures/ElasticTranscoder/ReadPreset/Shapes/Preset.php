<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Container
 * @property AudioParameters|null $Audio
 * @property VideoParameters|null $Video
 * @property Thumbnails|null $Thumbnails
 * @property string|null $Type
 */
class Preset extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Container?: string|null,
     *     Audio?: AudioParameters|null,
     *     Video?: VideoParameters|null,
     *     Thumbnails?: Thumbnails|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
