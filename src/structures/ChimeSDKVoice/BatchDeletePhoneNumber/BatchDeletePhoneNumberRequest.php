<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\BatchDeletePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PhoneNumberIds
 */
class BatchDeletePhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
