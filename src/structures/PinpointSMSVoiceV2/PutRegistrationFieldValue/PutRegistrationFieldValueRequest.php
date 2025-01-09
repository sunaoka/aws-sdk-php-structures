<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutRegistrationFieldValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property string $FieldPath
 * @property list<string> $SelectChoices
 * @property string $TextValue
 * @property string $RegistrationAttachmentId
 */
class PutRegistrationFieldValueRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     FieldPath: string,
     *     SelectChoices?: list<string>,
     *     TextValue?: string,
     *     RegistrationAttachmentId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
