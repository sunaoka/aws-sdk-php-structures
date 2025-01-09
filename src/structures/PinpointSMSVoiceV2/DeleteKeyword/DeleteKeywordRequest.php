<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteKeyword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property string $Keyword
 */
class DeleteKeywordRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     Keyword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
