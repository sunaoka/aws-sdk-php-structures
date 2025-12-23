<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldPath
 * @property list<string>|null $SelectChoices
 * @property string|null $TextValue
 * @property string|null $RegistrationAttachmentId
 * @property string|null $DeniedReason
 * @property string|null $Feedback
 */
class RegistrationFieldValueInformation extends Shape
{
    /**
     * @param array{
     *     FieldPath: string,
     *     SelectChoices?: list<string>|null,
     *     TextValue?: string|null,
     *     RegistrationAttachmentId?: string|null,
     *     DeniedReason?: string|null,
     *     Feedback?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
