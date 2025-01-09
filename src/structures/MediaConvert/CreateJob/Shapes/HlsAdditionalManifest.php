<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestNameModifier
 * @property list<string> $SelectedOutputs
 */
class HlsAdditionalManifest extends Shape
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
