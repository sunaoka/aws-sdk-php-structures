<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuth2Authentication|null $google
 * @property OAuth2Authentication|null $apple
 * @property OAuth2Authentication|null $x
 * @property OAuth2Authentication|null $telegram
 * @property OAuth2Authentication|null $github
 */
class LinkedAccountOAuth2 extends Shape
{
    /**
     * @param array{
     *     google?: OAuth2Authentication|null,
     *     apple?: OAuth2Authentication|null,
     *     x?: OAuth2Authentication|null,
     *     telegram?: OAuth2Authentication|null,
     *     github?: OAuth2Authentication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
