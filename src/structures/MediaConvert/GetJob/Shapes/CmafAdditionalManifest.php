<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestNameModifier
 * @property list<string> $SelectedOutputs
 */
class CmafAdditionalManifest extends Shape
{
    /**
     * @param array{
     *     ManifestNameModifier?: string,
     *     SelectedOutputs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
