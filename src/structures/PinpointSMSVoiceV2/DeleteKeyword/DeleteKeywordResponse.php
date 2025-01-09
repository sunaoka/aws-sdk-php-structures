<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteKeyword;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OriginationIdentityArn
 * @property string $OriginationIdentity
 * @property string $Keyword
 * @property string $KeywordMessage
 * @property 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN' $KeywordAction
 */
class DeleteKeywordResponse extends Response
{
}
