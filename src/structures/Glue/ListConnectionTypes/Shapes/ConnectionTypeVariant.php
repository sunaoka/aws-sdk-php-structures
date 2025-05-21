<?php

namespace Sunaoka\Aws\Structures\Glue\ListConnectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionTypeVariantName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $LogoUrl
 */
class ConnectionTypeVariant extends Shape
{
    /**
     * @param array{
     *     ConnectionTypeVariantName?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     LogoUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
