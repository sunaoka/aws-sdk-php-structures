<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DistributeImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceImage
 * @property string $distributionConfigurationArn
 * @property string $executionRole
 * @property array<string, string>|null $tags
 * @property string $clientToken
 * @property Shapes\ImageLoggingConfiguration|null $loggingConfiguration
 */
class DistributeImageRequest extends Request
{
    /**
     * @param array{
     *     sourceImage: string,
     *     distributionConfigurationArn: string,
     *     executionRole: string,
     *     tags?: array<string, string>|null,
     *     clientToken: string,
     *     loggingConfiguration?: Shapes\ImageLoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
