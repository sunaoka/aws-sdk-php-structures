<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InitialPath
 * @property RegisteredUserConsoleFeatureConfigurations|null $FeatureConfigurations
 */
class RegisteredUserQuickSightConsoleEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialPath?: string|null,
     *     FeatureConfigurations?: RegisteredUserConsoleFeatureConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
