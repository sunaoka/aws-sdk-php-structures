<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PermissionsBoundaryArn
 * @property string $PermissionsBoundaryType
 */
class AwsIamPermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     PermissionsBoundaryArn?: string,
     *     PermissionsBoundaryType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
