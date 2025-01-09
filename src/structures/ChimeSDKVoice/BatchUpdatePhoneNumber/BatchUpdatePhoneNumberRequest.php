<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\BatchUpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdatePhoneNumberRequestItem> $UpdatePhoneNumberRequestItems
 */
class BatchUpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{UpdatePhoneNumberRequestItems: list<Shapes\UpdatePhoneNumberRequestItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
