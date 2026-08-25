<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizationId
 * @property string|null $nextToken
 */
class GetRequestAuthorizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     authorizationId: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
