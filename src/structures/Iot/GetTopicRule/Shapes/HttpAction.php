<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string|null $confirmationUrl
 * @property list<HttpActionHeader>|null $headers
 * @property HttpAuthorization|null $auth
 * @property bool|null $enableBatching
 * @property BatchConfig|null $batchConfig
 */
class HttpAction extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     confirmationUrl?: string|null,
     *     headers?: list<HttpActionHeader>|null,
     *     auth?: HttpAuthorization|null,
     *     enableBatching?: bool|null,
     *     batchConfig?: BatchConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
