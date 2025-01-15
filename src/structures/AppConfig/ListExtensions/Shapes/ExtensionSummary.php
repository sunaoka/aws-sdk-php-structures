<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property int|null $VersionNumber
 * @property string|null $Arn
 * @property string|null $Description
 */
class ExtensionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     VersionNumber?: int|null,
     *     Arn?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
