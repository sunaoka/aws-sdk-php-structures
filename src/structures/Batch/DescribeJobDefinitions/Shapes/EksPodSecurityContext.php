<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $runAsUser
 * @property int|null $runAsGroup
 * @property bool|null $runAsNonRoot
 * @property EksSeccompProfile|null $seccompProfile
 * @property int|null $fsGroup
 */
class EksPodSecurityContext extends Shape
{
    /**
     * @param array{
     *     runAsUser?: int|null,
     *     runAsGroup?: int|null,
     *     runAsNonRoot?: bool|null,
     *     seccompProfile?: EksSeccompProfile|null,
     *     fsGroup?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
