<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string|null $confirmationUrl
 * @property list<HttpActionHeader>|null $headers
 * @property HttpAuthorization|null $auth
 */
class HttpAction extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     confirmationUrl?: string|null,
     *     headers?: list<HttpActionHeader>|null,
     *     auth?: HttpAuthorization|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
