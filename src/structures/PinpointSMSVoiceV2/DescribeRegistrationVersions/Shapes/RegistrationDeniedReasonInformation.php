<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property string $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $DocumentationTitle
 * @property string|null $DocumentationLink
 */
class RegistrationDeniedReasonInformation extends Shape
{
    /**
     * @param array{
     *     Reason: string,
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
