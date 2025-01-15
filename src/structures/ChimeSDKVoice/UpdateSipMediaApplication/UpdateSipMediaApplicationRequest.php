<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property string|null $Name
 * @property list<Shapes\SipMediaApplicationEndpoint>|null $Endpoints
 */
class UpdateSipMediaApplicationRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     Name?: string|null,
     *     Endpoints?: list<Shapes\SipMediaApplicationEndpoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
