<?php

namespace Sunaoka\Aws\Structures\KinesisVideoMedia\GetMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property Shapes\StartSelector $StartSelector
 */
class GetMediaRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     StartSelector: Shapes\StartSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
