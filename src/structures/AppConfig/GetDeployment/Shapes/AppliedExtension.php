<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtensionId
 * @property string $ExtensionAssociationId
 * @property int $VersionNumber
 * @property array<string, string> $Parameters
 */
class AppliedExtension extends Shape
{
    /**
     * @param array{
     *     ExtensionId?: string,
     *     ExtensionAssociationId?: string,
     *     VersionNumber?: int,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
