<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListOfferingsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
