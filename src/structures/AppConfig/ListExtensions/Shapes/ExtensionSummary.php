<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property int $VersionNumber
 * @property string $Arn
 * @property string $Description
 */
class ExtensionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     VersionNumber?: int,
     *     Arn?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
