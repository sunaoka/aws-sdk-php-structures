<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExtensionId
 * @property string|null $ExtensionAssociationId
 * @property int|null $VersionNumber
 * @property array<string, string>|null $Parameters
 */
class AppliedExtension extends Shape
{
    /**
     * @param array{
     *     ExtensionId?: string|null,
     *     ExtensionAssociationId?: string|null,
     *     VersionNumber?: int|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
