<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputIdentifier $inputIdentifier
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListInputRoutingsRequest extends Request
{
    /**
     * @param array{
     *     inputIdentifier: Shapes\InputIdentifier,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
