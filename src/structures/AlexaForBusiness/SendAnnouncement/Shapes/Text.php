<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendAnnouncement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US' $Locale
 * @property string $Value
 */
class Text extends Shape
{
    /**
     * @param array{
     *     Locale: 'en-US',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
