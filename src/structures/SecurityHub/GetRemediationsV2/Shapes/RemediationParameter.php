<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Description
 * @property bool|null $Required
 */
class RemediationParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: string,
     *     Description: string,
     *     Required?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
