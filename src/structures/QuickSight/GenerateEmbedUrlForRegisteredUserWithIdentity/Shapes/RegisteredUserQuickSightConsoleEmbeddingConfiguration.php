<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialPath
 * @property RegisteredUserConsoleFeatureConfigurations $FeatureConfigurations
 */
class RegisteredUserQuickSightConsoleEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialPath?: string,
     *     FeatureConfigurations?: RegisteredUserConsoleFeatureConfigurations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
