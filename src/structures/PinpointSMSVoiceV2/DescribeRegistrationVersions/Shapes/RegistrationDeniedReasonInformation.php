<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property string $ShortDescription
 * @property string $LongDescription
 * @property string $DocumentationTitle
 * @property string $DocumentationLink
 */
class RegistrationDeniedReasonInformation extends Shape
{
    /**
     * @param array{
     *     Reason: string,
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
