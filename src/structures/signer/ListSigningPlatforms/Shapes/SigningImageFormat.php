<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'JSON'|'JSONEmbedded'|'JSONDetached'> $supportedFormats
 * @property 'JSON'|'JSONEmbedded'|'JSONDetached' $defaultFormat
 */
class SigningImageFormat extends Shape
{
    /**
     * @param array{
     *     supportedFormats: list<'JSON'|'JSONEmbedded'|'JSONDetached'>,
     *     defaultFormat: 'JSON'|'JSONEmbedded'|'JSONDetached'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
