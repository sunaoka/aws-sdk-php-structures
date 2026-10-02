<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListNotifyCodeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inlineTemplateBody
 * @property array<string, string>|null $destinationCountryParameters
 */
class TextParameters extends Shape
{
    /**
     * @param array{
     *     inlineTemplateBody?: string|null,
     *     destinationCountryParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
