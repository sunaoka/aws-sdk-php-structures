<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $crossAccountRoleArn
 * @property string|null $externalId
 */
class CrossAccountRole extends Shape
{
    /**
     * @param array{
     *     crossAccountRoleArn: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
