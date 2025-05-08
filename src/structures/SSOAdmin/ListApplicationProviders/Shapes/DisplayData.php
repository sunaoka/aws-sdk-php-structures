<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayName
 * @property string|null $IconUrl
 * @property string|null $Description
 */
class DisplayData extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     IconUrl?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
