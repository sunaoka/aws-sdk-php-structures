<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateImageGenerationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property Shapes\ImageGenerationConfiguration $ImageGenerationConfiguration
 */
class UpdateImageGenerationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     ImageGenerationConfiguration?: Shapes\ImageGenerationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
