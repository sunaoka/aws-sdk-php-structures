<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property Shapes\Video|null $video
 * @property array<string, string>|null $tags
 */
class CreateEncoderConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     video?: Shapes\Video|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
