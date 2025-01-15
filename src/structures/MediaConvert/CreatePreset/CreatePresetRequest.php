<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Category
 * @property string|null $Description
 * @property string $Name
 * @property Shapes\PresetSettings $Settings
 * @property array<string, string>|null $Tags
 */
class CreatePresetRequest extends Request
{
    /**
     * @param array{
     *     Category?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     Settings: Shapes\PresetSettings,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
