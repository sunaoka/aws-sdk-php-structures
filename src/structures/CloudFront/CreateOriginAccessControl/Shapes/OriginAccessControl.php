<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginAccessControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property OriginAccessControlConfig $OriginAccessControlConfig
 */
class OriginAccessControl extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     OriginAccessControlConfig?: OriginAccessControlConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
