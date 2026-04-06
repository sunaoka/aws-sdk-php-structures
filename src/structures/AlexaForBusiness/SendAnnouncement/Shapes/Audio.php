<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendAnnouncement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US' $Locale
 * @property string $Location
 */
class Audio extends Shape
{
    /**
     * @param array{
     *     Locale: 'en-US',
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
