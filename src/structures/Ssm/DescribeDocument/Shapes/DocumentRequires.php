<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Version
 * @property string $RequireType
 * @property string $VersionName
 */
class DocumentRequires extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Version?: string,
     *     RequireType?: string,
     *     VersionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
