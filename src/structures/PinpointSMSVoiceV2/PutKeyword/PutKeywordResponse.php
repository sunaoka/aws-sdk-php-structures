<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutKeyword;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OriginationIdentityArn
 * @property string|null $OriginationIdentity
 * @property string|null $Keyword
 * @property string|null $KeywordMessage
 * @property 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN'|null $KeywordAction
 */
class PutKeywordResponse extends Response
{
}
