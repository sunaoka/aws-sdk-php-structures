<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ExcludeBootVolumes
 * @property list<string>|null $ExcludeVolumeTypes
 * @property list<Tag>|null $ExcludeTags
 */
class Exclusions extends Shape
{
    /**
     * @param array{
     *     ExcludeBootVolumes?: bool|null,
     *     ExcludeVolumeTypes?: list<string>|null,
     *     ExcludeTags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
