<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'attachment-status' $Name
 * @property list<string> $Values
 */
class RegistrationAttachmentFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'attachment-status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
