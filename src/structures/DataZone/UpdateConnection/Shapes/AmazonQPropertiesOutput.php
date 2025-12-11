<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authMode
 * @property bool $isEnabled
 * @property string|null $profileArn
 */
class AmazonQPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     authMode?: string|null,
     *     isEnabled: bool,
     *     profileArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
