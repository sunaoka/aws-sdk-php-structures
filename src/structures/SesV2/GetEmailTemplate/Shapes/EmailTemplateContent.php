<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Subject
 * @property string|null $Text
 * @property string|null $Html
 */
class EmailTemplateContent extends Shape
{
    /**
     * @param array{
     *     Subject?: string|null,
     *     Text?: string|null,
     *     Html?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
