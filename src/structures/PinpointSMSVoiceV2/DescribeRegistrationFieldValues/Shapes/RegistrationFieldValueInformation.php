<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldPath
 * @property list<string> $SelectChoices
 * @property string $TextValue
 * @property string $RegistrationAttachmentId
 * @property string $DeniedReason
 */
class RegistrationFieldValueInformation extends Shape
{
    /**
     * @param array{
     *     FieldPath: string,
     *     SelectChoices?: list<string>,
     *     TextValue?: string,
     *     RegistrationAttachmentId?: string,
     *     DeniedReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
