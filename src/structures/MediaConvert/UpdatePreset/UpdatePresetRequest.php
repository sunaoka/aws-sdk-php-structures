<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Category
 * @property string $Description
 * @property string $Name
 * @property Shapes\PresetSettings $Settings
 */
class UpdatePresetRequest extends Request
{
    /**
     * @param array{
     *     Category?: string,
     *     Description?: string,
     *     Name: string,
     *     Settings?: Shapes\PresetSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
