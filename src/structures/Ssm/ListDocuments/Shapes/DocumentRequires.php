<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Version
 * @property string|null $RequireType
 * @property string|null $VersionName
 */
class DocumentRequires extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Version?: string|null,
     *     RequireType?: string|null,
     *     VersionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
