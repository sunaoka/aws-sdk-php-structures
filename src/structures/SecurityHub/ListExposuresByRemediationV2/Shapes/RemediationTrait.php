<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Title
 */
class RemediationTrait extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
