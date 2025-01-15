<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $blueprintId
 * @property string|null $name
 * @property string|null $group
 * @property 'os'|'app'|null $type
 * @property string|null $description
 * @property bool|null $isActive
 * @property int|null $minPower
 * @property string|null $version
 * @property string|null $versionCode
 * @property string|null $productUrl
 * @property string|null $licenseUrl
 * @property 'LINUX_UNIX'|'WINDOWS'|null $platform
 * @property 'LfR'|null $appCategory
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintId?: string|null,
     *     name?: string|null,
     *     group?: string|null,
     *     type?: 'os'|'app'|null,
     *     description?: string|null,
     *     isActive?: bool|null,
     *     minPower?: int|null,
     *     version?: string|null,
     *     versionCode?: string|null,
     *     productUrl?: string|null,
     *     licenseUrl?: string|null,
     *     platform?: 'LINUX_UNIX'|'WINDOWS'|null,
     *     appCategory?: 'LfR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
