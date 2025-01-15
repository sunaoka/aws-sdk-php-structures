<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ViewBilling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $Start
 * @property \Aws\Api\DateTimeResult|null $End
 * @property string|null $Marker
 * @property int<min, 100>|null $MaxItems
 */
class ViewBillingRequest extends Request
{
    /**
     * @param array{
     *     Start?: \Aws\Api\DateTimeResult|null,
     *     End?: \Aws\Api\DateTimeResult|null,
     *     Marker?: string|null,
     *     MaxItems?: int<min, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
