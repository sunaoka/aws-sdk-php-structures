<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutKeyword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property string $Keyword
 * @property string $KeywordMessage
 * @property 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN' $KeywordAction
 */
class PutKeywordRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     Keyword: string,
     *     KeywordMessage: string,
     *     KeywordAction?: 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
