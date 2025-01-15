<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $locationRegistrationExcludeS3Locations
 * @property string|null $locationRegistrationRole
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     locationRegistrationExcludeS3Locations?: list<string>|null,
     *     locationRegistrationRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
