<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutSipMediaApplicationLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property Shapes\SipMediaApplicationLoggingConfiguration $SipMediaApplicationLoggingConfiguration
 */
class PutSipMediaApplicationLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     SipMediaApplicationLoggingConfiguration?: Shapes\SipMediaApplicationLoggingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
