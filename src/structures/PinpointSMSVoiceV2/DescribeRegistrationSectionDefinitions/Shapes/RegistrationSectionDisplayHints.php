<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $DocumentationTitle
 * @property string|null $DocumentationLink
 */
class RegistrationSectionDisplayHints extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ShortDescription: string,
     *     LongDescription?: string|null,
     *     DocumentationTitle?: string|null,
     *     DocumentationLink?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
