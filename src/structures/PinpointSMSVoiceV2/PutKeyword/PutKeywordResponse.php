<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutKeyword;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OriginationIdentityArn
 * @property string $OriginationIdentity
 * @property string $Keyword
 * @property string $KeywordMessage
 * @property 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN' $KeywordAction
 */
class PutKeywordResponse extends Response
{
}
