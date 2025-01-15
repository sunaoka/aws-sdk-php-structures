<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $targetAccountIds
 * @property array<string, string>|null $amiTags
 * @property string|null $kmsKeyId
 * @property LaunchPermissionConfiguration|null $launchPermission
 */
class AmiDistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     targetAccountIds?: list<string>|null,
     *     amiTags?: array<string, string>|null,
     *     kmsKeyId?: string|null,
     *     launchPermission?: LaunchPermissionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
