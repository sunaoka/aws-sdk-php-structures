<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property string $Name
 * @property list<Shapes\SipMediaApplicationEndpoint> $Endpoints
 */
class UpdateSipMediaApplicationRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     Name?: string,
     *     Endpoints?: list<Shapes\SipMediaApplicationEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
