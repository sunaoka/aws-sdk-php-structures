<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property EksHostPath $hostPath
 * @property EksEmptyDir $emptyDir
 * @property EksSecret $secret
 * @property EksPersistentVolumeClaim $persistentVolumeClaim
 */
class EksVolume extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     hostPath?: EksHostPath,
     *     emptyDir?: EksEmptyDir,
     *     secret?: EksSecret,
     *     persistentVolumeClaim?: EksPersistentVolumeClaim
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
