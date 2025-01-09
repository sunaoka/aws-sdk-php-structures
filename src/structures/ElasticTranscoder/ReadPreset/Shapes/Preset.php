<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property string $Container
 * @property AudioParameters $Audio
 * @property VideoParameters $Video
 * @property Thumbnails $Thumbnails
 * @property string $Type
 */
class Preset extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Description?: string,
     *     Container?: string,
     *     Audio?: AudioParameters,
     *     Video?: VideoParameters,
     *     Thumbnails?: Thumbnails,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
