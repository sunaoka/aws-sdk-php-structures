<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingPromotions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListOfferingPromotionsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
