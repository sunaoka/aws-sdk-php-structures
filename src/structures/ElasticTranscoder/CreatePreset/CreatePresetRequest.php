<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $Container
 * @property Shapes\VideoParameters|null $Video
 * @property Shapes\AudioParameters|null $Audio
 * @property Shapes\Thumbnails|null $Thumbnails
 */
class CreatePresetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Container: string,
     *     Video?: Shapes\VideoParameters|null,
     *     Audio?: Shapes\AudioParameters|null,
     *     Thumbnails?: Shapes\Thumbnails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
