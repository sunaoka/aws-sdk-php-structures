<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string $confirmationUrl
 * @property list<HttpActionHeader> $headers
 * @property HttpAuthorization $auth
 */
class HttpAction extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     confirmationUrl?: string,
     *     headers?: list<HttpActionHeader>,
     *     auth?: HttpAuthorization
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
