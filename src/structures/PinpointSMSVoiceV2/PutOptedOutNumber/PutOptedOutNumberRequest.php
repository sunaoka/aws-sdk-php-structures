<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutOptedOutNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property string $OptedOutNumber
 */
class PutOptedOutNumberRequest extends Request
{
    /**
     * @param array{
     *     OptOutListName: string,
     *     OptedOutNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
