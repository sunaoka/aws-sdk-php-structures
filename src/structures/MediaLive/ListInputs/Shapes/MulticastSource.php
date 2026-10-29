<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIp
 * @property string $Url
 * @property string|null $SecondarySourceIp
 * @property string|null $SecondaryUrl
 */
class MulticastSource extends Shape
{
    /**
     * @param array{
     *     SourceIp?: string|null,
     *     Url: string,
     *     SecondarySourceIp?: string|null,
     *     SecondaryUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
