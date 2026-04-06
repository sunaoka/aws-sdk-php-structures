<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $DocumentationTitle
 * @property string|null $DocumentationLink
 * @property list<SelectOptionDescription>|null $SelectOptionDescriptions
 * @property string|null $TextValidationDescription
 * @property string|null $ExampleTextValue
 */
class RegistrationFieldDisplayHints extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ShortDescription: string,
     *     LongDescription?: string|null,
     *     DocumentationTitle?: string|null,
     *     DocumentationLink?: string|null,
     *     SelectOptionDescriptions?: list<SelectOptionDescription>|null,
     *     TextValidationDescription?: string|null,
     *     ExampleTextValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
