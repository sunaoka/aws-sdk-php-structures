<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\Video $video
 * @property array<string, string> $tags
 */
class CreateEncoderConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     video?: Shapes\Video,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
