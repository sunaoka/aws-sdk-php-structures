<?php

namespace Sunaoka\Aws\Structures\KinesisVideoMedia\GetMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property Shapes\StartSelector $StartSelector
 */
class GetMediaRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     StartSelector: Shapes\StartSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
