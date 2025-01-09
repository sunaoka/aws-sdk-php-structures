<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $dataProtectionSettingsArn
 * @property string $description
 * @property string $displayName
 */
class DataProtectionSettingsSummary extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     dataProtectionSettingsArn: string,
     *     description?: string,
     *     displayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
