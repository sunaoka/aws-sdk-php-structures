<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property string $name
 * @property list<string>|null $dependsOn
 * @property ModuleParameters|null $moduleParameters
 */
class ModuleConfiguration extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     name: string,
     *     dependsOn?: list<string>|null,
     *     moduleParameters?: ModuleParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
