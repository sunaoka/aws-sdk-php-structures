<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string|null $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $DocumentationTitle
 * @property string|null $DocumentationLink
 */
class RegistrationTypeDisplayHints extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ShortDescription?: string|null,
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
