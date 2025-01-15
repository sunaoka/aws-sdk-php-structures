<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Category
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string $Name
 * @property PresetSettings $Settings
 * @property 'SYSTEM'|'CUSTOM'|null $Type
 */
class Preset extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Category?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     Settings: PresetSettings,
     *     Type?: 'SYSTEM'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
