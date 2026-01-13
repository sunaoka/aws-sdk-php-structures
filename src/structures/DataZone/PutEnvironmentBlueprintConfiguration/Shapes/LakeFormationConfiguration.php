<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $locationRegistrationRole
 * @property list<string>|null $locationRegistrationExcludeS3Locations
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     locationRegistrationRole?: string|null,
     *     locationRegistrationExcludeS3Locations?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
