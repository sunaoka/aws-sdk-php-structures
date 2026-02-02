<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetIdentityContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property Shapes\UserIdentifier $UserIdentifier
 * @property string|null $Namespace
 * @property \Aws\Api\DateTimeResult|null $SessionExpiresAt
 */
class GetIdentityContextRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     UserIdentifier: Shapes\UserIdentifier,
     *     Namespace?: string|null,
     *     SessionExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
