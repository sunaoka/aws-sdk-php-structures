<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Details
 * @property array<string, string>|null $Attributes
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Details: string,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
