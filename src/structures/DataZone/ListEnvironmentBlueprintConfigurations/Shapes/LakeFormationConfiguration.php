<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $locationRegistrationExcludeS3Locations
 * @property string $locationRegistrationRole
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     locationRegistrationExcludeS3Locations?: list<string>,
     *     locationRegistrationRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
