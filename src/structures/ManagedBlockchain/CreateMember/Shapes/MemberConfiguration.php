<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property MemberFrameworkConfiguration $FrameworkConfiguration
 * @property MemberLogPublishingConfiguration $LogPublishingConfiguration
 * @property array<string, string> $Tags
 * @property string $KmsKeyArn
 */
class MemberConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     FrameworkConfiguration: MemberFrameworkConfiguration,
     *     LogPublishingConfiguration?: MemberLogPublishingConfiguration,
     *     Tags?: array<string, string>,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
