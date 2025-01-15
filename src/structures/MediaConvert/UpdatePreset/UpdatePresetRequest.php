<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Category
 * @property string|null $Description
 * @property string $Name
 * @property Shapes\PresetSettings|null $Settings
 */
class UpdatePresetRequest extends Request
{
    /**
     * @param array{
     *     Category?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     Settings?: Shapes\PresetSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
