<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subject
 * @property string $Text
 * @property string $Html
 */
class EmailTemplateContent extends Shape
{
    /**
     * @param array{
     *     Subject?: string,
     *     Text?: string,
     *     Html?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
