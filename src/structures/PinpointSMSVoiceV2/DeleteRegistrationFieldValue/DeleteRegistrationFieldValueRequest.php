<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistrationFieldValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property string $FieldPath
 */
class DeleteRegistrationFieldValueRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     FieldPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
