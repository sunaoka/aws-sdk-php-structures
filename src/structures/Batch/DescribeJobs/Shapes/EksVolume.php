<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property EksHostPath|null $hostPath
 * @property EksEmptyDir|null $emptyDir
 * @property EksSecret|null $secret
 */
class EksVolume extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     hostPath?: EksHostPath|null,
     *     emptyDir?: EksEmptyDir|null,
     *     secret?: EksSecret|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
