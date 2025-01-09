<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DisplayName
 * @property string $IconUrl
 */
class DisplayData extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DisplayName?: string,
     *     IconUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
