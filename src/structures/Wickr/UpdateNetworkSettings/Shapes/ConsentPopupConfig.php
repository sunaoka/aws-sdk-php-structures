<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $header
 * @property string|null $content
 * @property string|null $closeButtonLabel
 */
class ConsentPopupConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     header?: string|null,
     *     content?: string|null,
     *     closeButtonLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
