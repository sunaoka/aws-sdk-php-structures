<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ExcludeBootVolume
 * @property bool|null $NoReboot
 * @property list<Tag>|null $ExcludeDataVolumeTags
 */
class Parameters extends Shape
{
    /**
     * @param array{
     *     ExcludeBootVolume?: bool|null,
     *     NoReboot?: bool|null,
     *     ExcludeDataVolumeTags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
