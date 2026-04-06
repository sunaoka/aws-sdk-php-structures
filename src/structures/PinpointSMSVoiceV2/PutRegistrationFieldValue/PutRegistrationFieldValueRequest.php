<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutRegistrationFieldValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property string $FieldPath
 * @property list<string>|null $SelectChoices
 * @property string|null $TextValue
 * @property string|null $RegistrationAttachmentId
 */
class PutRegistrationFieldValueRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     FieldPath: string,
     *     SelectChoices?: list<string>|null,
     *     TextValue?: string|null,
     *     RegistrationAttachmentId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
