<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensArn
 * @property string $LensVersion
 * @property string $Name
 * @property string $Description
 * @property string $Owner
 * @property string $ShareInvitationId
 * @property array<string, string> $Tags
 */
class Lens extends Shape
{
    /**
     * @param array{
     *     LensArn?: string,
     *     LensVersion?: string,
     *     Name?: string,
     *     Description?: string,
     *     Owner?: string,
     *     ShareInvitationId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
