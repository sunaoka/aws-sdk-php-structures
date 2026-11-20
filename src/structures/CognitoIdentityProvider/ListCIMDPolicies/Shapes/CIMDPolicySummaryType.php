<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListCIMDPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CIMDPolicyId
 * @property string|null $ClientId
 * @property string $PolicyName
 * @property int<86400, 31556952>|null $CacheDuration
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class CIMDPolicySummaryType extends Shape
{
    /**
     * @param array{
     *     CIMDPolicyId: string,
     *     ClientId?: string|null,
     *     PolicyName: string,
     *     CacheDuration?: int<86400, 31556952>|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
