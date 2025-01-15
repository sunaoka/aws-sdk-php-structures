<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string $dataProtectionSettingsArn
 * @property string|null $description
 * @property string|null $displayName
 */
class DataProtectionSettingsSummary extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     dataProtectionSettingsArn: string,
     *     description?: string|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
