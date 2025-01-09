<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ExcludeBootVolumes
 * @property list<string> $ExcludeVolumeTypes
 * @property list<Tag> $ExcludeTags
 */
class Exclusions extends Shape
{
    /**
     * @param array{
     *     ExcludeBootVolumes?: bool,
     *     ExcludeVolumeTypes?: list<string>,
     *     ExcludeTags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
