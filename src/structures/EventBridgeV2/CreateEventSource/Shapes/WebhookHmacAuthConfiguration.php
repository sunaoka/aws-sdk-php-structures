<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHA256'|'SHA1' $Algorithm
 * @property 'HEX'|'BASE64' $Encoding
 * @property string $SignatureHttpHeader
 * @property string|null $SignaturePrefix
 * @property string|null $Delimiter
 * @property string|null $TimestampHttpHeader
 * @property string|null $TimestampPrefix
 * @property int<1, 900>|null $TimestampToleranceInSeconds
 * @property string|null $MessageIdHttpHeader
 * @property 'BODY'|'TIMESTAMP_DOT_BODY'|'MESSAGE_ID_DOT_TIMESTAMP_DOT_BODY' $SignedMessageComposition
 * @property string|null $SecretValue
 * @property 'RAW'|'BASE64'|null $SecretEncoding
 */
class WebhookHmacAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     Algorithm: 'SHA256'|'SHA1',
     *     Encoding: 'HEX'|'BASE64',
     *     SignatureHttpHeader: string,
     *     SignaturePrefix?: string|null,
     *     Delimiter?: string|null,
     *     TimestampHttpHeader?: string|null,
     *     TimestampPrefix?: string|null,
     *     TimestampToleranceInSeconds?: int<1, 900>|null,
     *     MessageIdHttpHeader?: string|null,
     *     SignedMessageComposition: 'BODY'|'TIMESTAMP_DOT_BODY'|'MESSAGE_ID_DOT_TIMESTAMP_DOT_BODY',
     *     SecretValue?: string|null,
     *     SecretEncoding?: 'RAW'|'BASE64'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
