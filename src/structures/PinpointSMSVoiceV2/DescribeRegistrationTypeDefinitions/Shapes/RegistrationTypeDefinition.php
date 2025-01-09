<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistrationType
 * @property list<SupportedAssociation> $SupportedAssociations
 * @property RegistrationTypeDisplayHints $DisplayHints
 */
class RegistrationTypeDefinition extends Shape
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     SupportedAssociations?: list<SupportedAssociation>,
     *     DisplayHints: RegistrationTypeDisplayHints
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
