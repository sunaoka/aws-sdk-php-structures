<?php

namespace Sunaoka\Aws\Structures\SesV2\ListResourceTenants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int|null $PageSize
 * @property string|null $NextToken
 */
class ListResourceTenantsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     PageSize?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
