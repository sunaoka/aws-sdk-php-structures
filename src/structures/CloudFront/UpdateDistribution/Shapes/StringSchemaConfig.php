<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property string|null $DefaultValue
 * @property bool $Required
 */
class StringSchemaConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     DefaultValue?: string|null,
     *     Required: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
