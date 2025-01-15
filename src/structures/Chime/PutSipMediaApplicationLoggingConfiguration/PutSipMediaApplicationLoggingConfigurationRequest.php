<?php

namespace Sunaoka\Aws\Structures\Chime\PutSipMediaApplicationLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property Shapes\SipMediaApplicationLoggingConfiguration|null $SipMediaApplicationLoggingConfiguration
 */
class PutSipMediaApplicationLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     SipMediaApplicationLoggingConfiguration?: Shapes\SipMediaApplicationLoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
