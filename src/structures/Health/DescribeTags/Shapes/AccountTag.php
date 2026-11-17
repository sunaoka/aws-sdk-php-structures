<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $value
 * @property 'ACCOUNT_RESOURCE_TAG'|null $type
 */
class AccountTag extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: string|null,
     *     type?: 'ACCOUNT_RESOURCE_TAG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
