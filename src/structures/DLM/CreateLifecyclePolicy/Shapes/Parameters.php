<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ExcludeBootVolume
 * @property bool $NoReboot
 * @property list<Tag> $ExcludeDataVolumeTags
 */
class Parameters extends Shape
{
    /**
     * @param array{
     *     ExcludeBootVolume?: bool,
     *     NoReboot?: bool,
     *     ExcludeDataVolumeTags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
