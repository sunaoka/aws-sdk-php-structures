<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintId
 * @property string $name
 * @property string $group
 * @property 'os'|'app' $type
 * @property string $description
 * @property bool $isActive
 * @property int $minPower
 * @property string $version
 * @property string $versionCode
 * @property string $productUrl
 * @property string $licenseUrl
 * @property 'LINUX_UNIX'|'WINDOWS' $platform
 * @property 'LfR' $appCategory
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintId?: string,
     *     name?: string,
     *     group?: string,
     *     type?: 'os'|'app',
     *     description?: string,
     *     isActive?: bool,
     *     minPower?: int,
     *     version?: string,
     *     versionCode?: string,
     *     productUrl?: string,
     *     licenseUrl?: string,
     *     platform?: 'LINUX_UNIX'|'WINDOWS',
     *     appCategory?: 'LfR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
