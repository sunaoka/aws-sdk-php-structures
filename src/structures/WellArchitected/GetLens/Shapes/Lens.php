<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LensArn
 * @property string|null $LensVersion
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Owner
 * @property string|null $ShareInvitationId
 * @property array<string, string>|null $Tags
 */
class Lens extends Shape
{
    /**
     * @param array{
     *     LensArn?: string|null,
     *     LensVersion?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Owner?: string|null,
     *     ShareInvitationId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
