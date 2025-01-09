<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteOptedOutNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property string $OptedOutNumber
 */
class DeleteOptedOutNumberRequest extends Request
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
