<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManifestNameModifier
 * @property list<string>|null $SelectedOutputs
 */
class HlsAdditionalManifest extends Shape
{
    /**
     * @param array{
     *     ManifestNameModifier?: string|null,
     *     SelectedOutputs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
