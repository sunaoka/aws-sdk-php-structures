<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataProtectionSettingsArn
 * @property string|null $displayName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class DataProtectionSettingsSummary extends Shape
{
    /**
     * @param array{
     *     dataProtectionSettingsArn: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
