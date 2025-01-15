<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property MemberFrameworkConfiguration $FrameworkConfiguration
 * @property MemberLogPublishingConfiguration|null $LogPublishingConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $KmsKeyArn
 */
class MemberConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     FrameworkConfiguration: MemberFrameworkConfiguration,
     *     LogPublishingConfiguration?: MemberLogPublishingConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
