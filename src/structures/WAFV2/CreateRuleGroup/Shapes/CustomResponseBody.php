<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT_PLAIN'|'TEXT_HTML'|'APPLICATION_JSON' $ContentType
 * @property string $Content
 */
class CustomResponseBody extends Shape
{
    /**
     * @param array{
     *     ContentType: 'TEXT_PLAIN'|'TEXT_HTML'|'APPLICATION_JSON',
     *     Content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
