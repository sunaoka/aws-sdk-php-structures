<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RuntimeDefault'|'Localhost'|'Unconfined' $type
 * @property string|null $localhostProfile
 */
class EksSeccompProfile extends Shape
{
    /**
     * @param array{
     *     type: 'RuntimeDefault'|'Localhost'|'Unconfined',
     *     localhostProfile?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
