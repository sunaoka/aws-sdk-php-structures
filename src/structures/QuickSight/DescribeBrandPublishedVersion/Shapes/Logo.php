<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AltText
 * @property LogoSet $LogoSet
 */
class Logo extends Shape
{
    /**
     * @param array{
     *     AltText: string,
     *     LogoSet: LogoSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
