<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Category
 * @property string $Description
 * @property string $Name
 * @property Shapes\PresetSettings $Settings
 * @property array<string, string> $Tags
 */
class CreatePresetRequest extends Request
{
    /**
     * @param array{
     *     Category?: string,
     *     Description?: string,
     *     Name: string,
     *     Settings: Shapes\PresetSettings,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
