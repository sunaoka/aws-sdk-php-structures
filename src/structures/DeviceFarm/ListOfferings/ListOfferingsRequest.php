<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListOfferingsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
