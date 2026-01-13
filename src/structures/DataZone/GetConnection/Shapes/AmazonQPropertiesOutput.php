<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isEnabled
 * @property string|null $profileArn
 * @property string|null $authMode
 */
class AmazonQPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     isEnabled: bool,
     *     profileArn?: string|null,
     *     authMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
