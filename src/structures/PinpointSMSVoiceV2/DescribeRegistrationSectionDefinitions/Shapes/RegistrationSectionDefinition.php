<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionPath
 * @property RegistrationSectionDisplayHints $DisplayHints
 */
class RegistrationSectionDefinition extends Shape
{
    /**
     * @param array{
     *     SectionPath: string,
     *     DisplayHints: RegistrationSectionDisplayHints
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
