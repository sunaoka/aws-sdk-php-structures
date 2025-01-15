<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManifestNameModifier
 * @property list<string>|null $SelectedOutputs
 */
class CmafAdditionalManifest extends Shape
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
