<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplicationAlexaSkillConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 */
class GetSipMediaApplicationAlexaSkillConfigurationRequest extends Request
{
    /**
     * @param array{SipMediaApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
