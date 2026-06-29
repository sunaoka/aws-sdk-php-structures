<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMS'|'MMS' $Channel
 * @property string|null $MessageBody
 * @property list<string>|null $MediaUrls
 * @property string|null $OriginationIdentity
 */
class RcsFallbackConfiguration extends Shape
{
    /**
     * @param array{
     *     Channel: 'SMS'|'MMS',
     *     MessageBody?: string|null,
     *     MediaUrls?: list<string>|null,
     *     OriginationIdentity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
