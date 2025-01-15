<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PermissionsBoundaryArn
 * @property string|null $PermissionsBoundaryType
 */
class AwsIamPermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     PermissionsBoundaryArn?: string|null,
     *     PermissionsBoundaryType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
