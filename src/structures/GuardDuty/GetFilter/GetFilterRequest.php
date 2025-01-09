<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $FilterName
 */
class GetFilterRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FilterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
