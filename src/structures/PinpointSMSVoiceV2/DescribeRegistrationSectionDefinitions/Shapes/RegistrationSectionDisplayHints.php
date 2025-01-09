<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $ShortDescription
 * @property string $LongDescription
 * @property string $DocumentationTitle
 * @property string $DocumentationLink
 */
class RegistrationSectionDisplayHints extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ShortDescription: string,
     *     LongDescription?: string,
     *     DocumentationTitle?: string,
     *     DocumentationLink?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
