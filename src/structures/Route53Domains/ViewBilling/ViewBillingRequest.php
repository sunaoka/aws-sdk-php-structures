<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ViewBilling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $Start
 * @property \Aws\Api\DateTimeResult $End
 * @property string $Marker
 * @property int $MaxItems
 */
class ViewBillingRequest extends Request
{
    /**
     * @param array{
     *     Start?: \Aws\Api\DateTimeResult,
     *     End?: \Aws\Api\DateTimeResult,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
