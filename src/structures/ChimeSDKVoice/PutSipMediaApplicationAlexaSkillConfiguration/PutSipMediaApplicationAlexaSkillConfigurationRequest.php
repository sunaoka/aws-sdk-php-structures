<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutSipMediaApplicationAlexaSkillConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property Shapes\SipMediaApplicationAlexaSkillConfiguration|null $SipMediaApplicationAlexaSkillConfiguration
 */
class PutSipMediaApplicationAlexaSkillConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     SipMediaApplicationAlexaSkillConfiguration?: Shapes\SipMediaApplicationAlexaSkillConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
