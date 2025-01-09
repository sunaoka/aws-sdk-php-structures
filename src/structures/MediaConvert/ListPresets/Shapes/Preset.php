<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Category
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Name
 * @property PresetSettings $Settings
 * @property 'SYSTEM'|'CUSTOM' $Type
 */
class Preset extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Category?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Settings: PresetSettings,
     *     Type?: 'SYSTEM'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
