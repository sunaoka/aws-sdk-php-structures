<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Container
 * @property Shapes\VideoParameters $Video
 * @property Shapes\AudioParameters $Audio
 * @property Shapes\Thumbnails $Thumbnails
 */
class CreatePresetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Container: string,
     *     Video?: Shapes\VideoParameters,
     *     Audio?: Shapes\AudioParameters,
     *     Thumbnails?: Shapes\Thumbnails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
