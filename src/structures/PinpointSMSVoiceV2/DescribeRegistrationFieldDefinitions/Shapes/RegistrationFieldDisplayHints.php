<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $ShortDescription
 * @property string $LongDescription
 * @property string $DocumentationTitle
 * @property string $DocumentationLink
 * @property list<SelectOptionDescription> $SelectOptionDescriptions
 * @property string $TextValidationDescription
 * @property string $ExampleTextValue
 */
class RegistrationFieldDisplayHints extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ShortDescription: string,
     *     LongDescription?: string,
     *     DocumentationTitle?: string,
     *     DocumentationLink?: string,
     *     SelectOptionDescriptions?: list<SelectOptionDescription>,
     *     TextValidationDescription?: string,
     *     ExampleTextValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
