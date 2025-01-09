<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteOptOutList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 */
class DeleteOptOutListRequest extends Request
{
    /**
     * @param array{OptOutListName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
