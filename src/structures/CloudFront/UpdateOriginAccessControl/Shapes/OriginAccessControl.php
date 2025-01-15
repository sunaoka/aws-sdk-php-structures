<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginAccessControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property OriginAccessControlConfig|null $OriginAccessControlConfig
 */
class OriginAccessControl extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     OriginAccessControlConfig?: OriginAccessControlConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
