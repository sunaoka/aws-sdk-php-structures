<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $targetAccountIds
 * @property array<string, string> $amiTags
 * @property string $kmsKeyId
 * @property LaunchPermissionConfiguration $launchPermission
 */
class AmiDistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     targetAccountIds?: list<string>,
     *     amiTags?: array<string, string>,
     *     kmsKeyId?: string,
     *     launchPermission?: LaunchPermissionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
