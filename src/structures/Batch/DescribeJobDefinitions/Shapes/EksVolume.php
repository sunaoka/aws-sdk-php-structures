<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property EksHostPath|null $hostPath
 * @property EksEmptyDir|null $emptyDir
 * @property EksSecret|null $secret
 * @property EksPersistentVolumeClaim|null $persistentVolumeClaim
 */
class EksVolume extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     hostPath?: EksHostPath|null,
     *     emptyDir?: EksEmptyDir|null,
     *     secret?: EksSecret|null,
     *     persistentVolumeClaim?: EksPersistentVolumeClaim|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
