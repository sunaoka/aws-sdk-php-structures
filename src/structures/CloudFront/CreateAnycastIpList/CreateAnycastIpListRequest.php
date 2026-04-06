<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateAnycastIpList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $IpCount
 * @property Shapes\Tags|null $Tags
 */
class CreateAnycastIpListRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IpCount: int,
     *     Tags?: Shapes\Tags|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
