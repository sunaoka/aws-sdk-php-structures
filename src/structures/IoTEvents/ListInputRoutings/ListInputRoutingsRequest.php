<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputIdentifier $inputIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListInputRoutingsRequest extends Request
{
    /**
     * @param array{
     *     inputIdentifier: Shapes\InputIdentifier,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
