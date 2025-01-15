<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string|null $IconUrl
 */
class DisplayData extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     IconUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
